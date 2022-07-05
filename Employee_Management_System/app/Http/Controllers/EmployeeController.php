<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Employees;
class EmployeeController extends Controller
{
    public function createEmployee(Request $request)
    {
        $employee = new Employees();
        $employee->name = $request->input('name');
        $employee->birth_date = $request->input('birth_date');
        $employee->salary = $request->input('salary');
        $employee->gender = $request->input('gender');
        $employee->save();
        return response()->json($employee);
    }
    public function listEmployee()
    {
        $employee = Employees::all();
        return response()->json($employee);
    }
    public function updateEmployee()
    {
        
    }
    public function removeEmployee()
    {
        
    }
}
