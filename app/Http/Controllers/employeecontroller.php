<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\Http\Resources\employee as employeeresource;

class employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= employee::paginate(5);
        return response()->json($employees);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = $request->isMethod('put') ? employee::findOrFail($request->employee_id) : new employee;
        $employee->id = $request->input('employee_id');
        $employee->name = $request->input('name');
        $employee->address = $request->input('address');
        if($employee->save()) {
            return response()->json(['result'=>'success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee= employee::findOrfail($id);
        return response()->json($employee);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = employee::findOrFail($id);
        if($employee->delete()) {
           return response()->json(['result'=>'success']);
        }  
    }
}
