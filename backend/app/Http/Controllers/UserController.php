<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Mail\SendCredentials;
use Illuminate\Support\Facades\Mail;
use App\Models\Student;
use App\Models\User;
use App\Models\Order;
use App\Models\Menu;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Employee;
use App\Models\Upload;
use Hash;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        return response()->json([
            'students' => Student::all()
        ]);
    }

    public function currentUser() {
        return response()->json(Auth::user()->only(['firstname', 'lastname', 'picture', 'role']));
    }

    public function setupAccount(Request $request) {
        $user = User::with('role')->where('id', $request->id)->first();
        return response()->json($user);
    }

    public function saveSetup(Request $request) {
        try {
            $user = User::find($request->id);
            $validate = $request->validate([
                'password' => 'required'
            ]);

            $user->password = $request->password;
            $user->update();

            return response()->json([
                'message' => 'Saved successfully'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function showUsers() {
        try {
            $currentUser = User::with('role')->find(Auth::id());

            if($currentUser->role->name =='Admin'){
                $users = User::with('role')
                ->where('role_id', '!=', 1)->get();
            }else{
                $users = User::with('role')
                ->where('role_id', '!=', 1)
                ->where('role_id', '!=', $currentUser->role_id)
                ->get();
            }

            $permissions = Permission::all();
            $roles = Role::all();

            return response()->json([
                'users' => $users,
                'currentUser' => $currentUser->role->name,
                'roles' => $roles
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Internal Server Error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function employeeList(){
        return response()->json(Employee::all());
    }

    public function login(Request $request) {
        try {
            if(is_null($request->email) || is_null($request->password)) {
                return response()->json([
                    'error' => 'Email and password are required'
                ]);
            }
            $credentials = User::where('email', $request->email)->first();
            if($credentials && Hash::check($request->password, $credentials->password)) {
                $token = $credentials->createToken('personal-token')->plainTextToken;
                if($credentials->status == null) {
                    $credentials->status = 'active';
                }
                $credentials->save();

                return response()->json([
                    'token' => $token,
                    'data' => $credentials
                ]);
            }else{
                return response()->json([
                    'error' => 'Invalid credentials'
                ]);
            }
        }catch(Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ]);
        }
    }

    function logout(Request $request){
        $user = Auth::user();
        if($user->status == 'Assigned') {
            return response()->json([
                'message' => 'You cannot log out while a delivery is in progress. Please complete or ask for reassignment of the delivery first.'
            ]);
        }

        $user->status = null;
        $user->save();
        $user->tokens()->delete();
        return response()->json([
            'success' => 'Logout successfully'
        ]);
    }



    ////////////////////////////////////////////////////////

    public function addUser(Request $request) {
        try {
            $validate = $request->validate([
                'firstname' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/'],
                'middlename' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/'],
                'lastname' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/'],
                'age' => 'required|integer',
                'gender' => 'required',
                'contact' => 'required',
                'address' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'role_id' => 'required',
                'picture' => 'nullable|mimes:png,jpg,jpeg|max:5400',
            ]);
            $password = $request->password;

            if($request->hasFile('picture')) {
                $file = $request->file('picture');
                $path = $file->store('images', 'public');
                $validate['picture'] = $path;
            }
            $user = User::create($validate);
            Mail::to($user->email)->send(new SendCredentials($user->id, $user->firstname));

            return response()->json([
                'message' => 'User added successfully'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }


    public function editUser(Request $request) {
        try {
            $user = User::find($request->id);
            $validate = $request->validate([
                'firstname' => ['nullable', 'string', 'regex:/^[A-Za-z\s]+$/'],
                'middlename' => ['nullable', 'string', 'regex:/^[A-Za-z\s]+$/'],
                'lastname' => ['nullable', 'string', 'regex:/^[A-Za-z\s]+$/'],
                'age' => 'nullable|integer',
                'gender' => 'nullable',
                'contact' => 'nullable',
                'address' => 'nullable|string',
                'role_id' => 'nullable|integer',
                'picture' => 'nullable|mimes:png,jpg,jpeg|max:5400',
            ]);
            if($request->hasFile('picture')) {
                $file = $request->file('picture');
                $path = $file->store('images', 'public');
                $validate['picture'] = $path;
            }
            $user->update($validate);

            return response()->json([
                'message' => 'User updated successfully'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function removeProfileImage(Request $request) {
        try {
            $user = User::find($request->id);
            $user->update(['picture' => null]);
            return response()->json([
                'message' => 'Profile removed'
            ]);
        }catch(Exception $e) {
            return response()->json([
                'error' => $request
            ]);
        }
    }

    public function deleteUser(Request $request) {
        $user = User::find($request->id);
        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ]);
    }


    ///////////

    public function accountView() {
        $user = User::with('role')->find(Auth::id());
        return response()->json([
            'user' => $user,
            'password' =>$user->password
        ]);
    }

    public function editProfile(Request $request) {
        try {
            $user = User::find($request->id);
            $validate = $request->validate([
                'firstname' => ['string', 'nullable', 'regex:/^[A-Za-z\s]+$/'],
                'middlename' => ['string', 'nullable', 'regex:/^[A-Za-z\s]+$/'],
                'lastname' => ['string', 'nullable', 'regex:/^[A-Za-z\s]+$/'],
                'age' => 'nullable|integer',
                'gender' => 'nullable',
                'contact' => 'nullable',
                'address' => 'nullable|string',
                // 'password' => 'nullable',
                'picture' => 'nullable|mimes:png,jpg,jpeg|max:5400',
            ]);
            if($request->hasFile('picture')) {
                $file = $request->file('picture');
                $path = $file->store('images', 'public');
                $validate['picture'] = $path;
            }
            if($request->password) {
                $validate['password'] = bcrypt($request->password);
            }
            $user->update($validate);
            return response()->json([
                'message' => 'Updated successfully'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function uploadFile(Request $request) {
        try {
            $user = User::find($request->user_id);
            $validate = $request->validate([
                'user_id' => 'required',
                'name' => 'required',
                'path' => 'required|mimes:pdf,doc,docx|max:10240'
            ]);
            $file = $request->file('path');
            $path = $file->store('uploads', 'public');
            $saveFile = Upload::create([
                'name' => $request->name,
                'path' => $path,
                'user_id' => $request->user_id
            ]);

            return response()->json([
                'message' => 'Uploaded successfully'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => 'File is required',
            ]);
        }
    }

    public function getFileUploads() {
        $uploads = Upload::where('user_id', Auth::user()->id)->get();
        return response()->json([
            'uploads' => $uploads
        ]);
    }

    public function removeFile(Request $request) {
        try {
            $file = Upload::find($request->id);
            $file->delete();
            return response()->json([
                'message' => 'File deleted'
            ]);
        }catch(Exception $e) {
            return response()->json([
                'error' => 'File not found'
            ]);
        }
    }


    //////////

    public function userMenuAccess() {
        $user = Auth::user();
        $role = $user->role()->with('permissions')->first();
        $menu = Menu::with('permissions')->get();
        return response()->json([
            'user' => $role,
            'menu' => $menu
        ]);
    }

    public function dashboard() {
        $user = Auth::user();
        $role = $user->role()->with('permissions')->first();
        $orders = Order::whereIn('status', ['Assigned', 'in_transit', 'to_be_deliver'])->count();
        $transit = Order::where('status', 'in_transit')->count();
        $myDelivery = Order::where('rider_id', Auth::user()->id)->whereIn('status', ['Assigned', 'in_transit'])->count();
        $delivered = Order::where('status', 'Delivered')->count();
        $users = User::whereHas('role', function($query) {
            $query->where('name', '!=', 'Admin');
        })->count();
        $riders = User::whereHas('role', function($query) {
            $query->whereIn('name', ['Rider', 'Food Rider', 'Delivery Rider', 'Food Delivery Rider']);
        })->count();


        return response()->json([
            'role' => $role,
            'users' => $users,
            'orders' => $orders,
            'riders' => $riders,
            'transit' => $transit,
            'myDelivery' => $myDelivery,
            'delivered' => $delivered
        ]);
    }
}
