<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Employee;

class ListController extends Controller
{
    public function employee(){
        return response()->json([
            Employee::all(),
            Student::all()
        ]);
    }

    public function student(){
        return response()->json(Student::all());
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

}
