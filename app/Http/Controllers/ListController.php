<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Employee;

class ListController extends Controller
{
    public function empployee(){
        return response()->json(Employee::all());
    }
}
