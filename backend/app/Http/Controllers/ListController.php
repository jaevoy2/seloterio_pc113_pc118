<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Student;
use App\Models\Employee;
use Hash;

class ListController extends Controller
{
    public function employee(){
        return response()->json([
            Employee::all(),
        ]);
    }

    public function searchEmployee(Request $request){
        $employee = Employee::query();

        if($request->has('search')) {
            $employee->where('firstname', 'like', '%' . $request->search . '%')
            ->orWhere('lastname', 'like', '%' . $request->search . '%')
            ->orWhere('id', 'like', '%' . $request->search . '%');
        }

        return response()->json($employee->get());
    }

    public function limit(Request $request){
        if($request->has('limit')) {
            $employee = Employee::paginate($request->limit);
            return response()->json($employee);
        }

    }

    public function create(Request $request){
        $validate = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'email' => 'required',
        ]);
        $validate['password'] = bcrypt($request->password);
        $employee = Employee::create($validate);

        return response()->json([
            'post' => $employee
        ]);
    }

    public function deleteEmployee(Request $request){
        $employee = Employee::findOrFail($request->id);
        $employee->delete();

        return response()->json([
            'message' => 'Employee deleted successfully',
        ]);
    }

    public function updateEmployee(Request $request){
        $employee = Employee::find($request->id);
        $validate = $request->validate([
            'firstname' => 'string',
            'lastname' => 'string',
            'address' => 'string',
            'password' => 'string',
        ]);
        $employee->update($validate);

        return response()->json([
            'success' => 'Employee updated successfully',
            'data' => $employee
        ]);
    }

    public function login(Request $request) {
        try {
            $employee = Employee::where('email', $request->email)->first();

            if($employee && Hash::check($request->password, $employee->password)) {
                $token = $employee->createToken('personal-token')->plainTextToken;
                return response()->json([
                    'token' => $token,
                    'data' => [
                        'name' => $employee->firstname,
                        'lastname' => $employee->lastname
                    ]
                ]);
            }else{
                return response()->json([
                    'error' => 'Login failed'
                ]);
            }
        }catch(Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }


    //student
    public function student(){
        return response()->json(Student::all());
    }

    public function addStudent(Request $request){
        $validate = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'course' => 'required',
            'email' => 'required',
        ]);
        $validate['password'] = bcrypt($request->password);
        $student = Student::create($validate);

        return response()->json([
            'post' => $student
        ]);
    }

    public function updateStudent(Request $request){
        $student = Student::find($request->id);
        $validate = $request->validate([
            'firstname' => 'string',
            'lastname' => 'string',
            'address' => 'string',
            'course' => 'string',
            'password' => 'string',
        ]);
        $student->update($validate);

        return response()->json([
            'success' => 'Student updated successfully',
        ]);
    }

    public function deleteStudent(Request $request){
        $student = Student::find($request->id);
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully',
        ]);
    }


}
