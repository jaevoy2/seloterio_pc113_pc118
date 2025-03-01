<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\User;
use App\Models\Employee;
use Hash;

class UserController extends Controller
{
    public function index(){
        return response()->json(User::all());
    }

    public function employeeList(){
        return response()->json(Employee::all());
    }

    public function create(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required'
        ]);
        $validate['password'] = bcrypt($request->password);
        $user = User::create($validate);

        return response()->json([
            'post' => $user
        ]);
    }

    public function login(Request $request) {
        $credentials = User::where('email', $request->email)->first();

        if($credentials) {
            $token = $credentials->createToken('personal-token')->plainTextToken;
            return response()->json([
                'token' => $token,
                'data' => $credentials
            ]);
        }else{
            return response()->json([
                'data' => 'login failed'
            ]);
        }

        // return response()->json($credentials);
    }
}
