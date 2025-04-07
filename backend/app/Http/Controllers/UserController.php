<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Student;
use App\Models\User;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Employee;
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

    public function showUsers() {
        try {
            $permissions = Permission::all();
            $roles = Role::all();
            $users = User::with('role', 'permissions')
            ->where('role_id', '!=', 1)->get();

            return response()->json([
                'users' => $users,
                'permissions' => $permissions,
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
                'role_id' => 'integer',
                'picture' => 'nullable|mimes:png,jpg,jpeg|max:5400',
            ]);
            if($request->hasFile('picture')) {
                $file = $request->file('picture');
                $path = $file->store('images', 'public');
                $validate['picture'] = $path;
            }
            $user = User::create($validate);

            if($request->permissions) {
                $user->permissions()->sync($request->permissions);
            }
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
                'firstname' => ['string', 'regex:/^[A-Za-z\s]+$/'],
                'middlename' => ['string', 'regex:/^[A-Za-z\s]+$/'],
                'lastname' => ['string', 'regex:/^[A-Za-z\s]+$/'],
                'age' => 'integer',
                'gender',
                'contact',
                'address' => 'string',
                'role_id' => 'integer',
                'picture' => 'nullable|mimes:png,jpg,jpeg|max:5400',
            ]);
            if($request->hasFile('picture')) {
                $file = $request->file('picture');
                $path = $file->store('images', 'public');
                $validate['picture'] = $path;
            }
            $user->update($validate);

            if($request->permissions) {
                $user->permissions()->sync($request->permissions);
            }
            return response()->json([
                'message' => 'User updated successfully'
            ]);
        }catch(ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage()
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
}
