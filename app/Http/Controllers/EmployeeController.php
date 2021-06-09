<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create(){

        $data = company::where('isadmin',auth()->id())->get();
        //dd($data);
        return view('employee', ['datas' => $data ]);
    }

    public function store(){

        //dd(request()->all());

        request()->validate([
            'first_name' => 'required| max:255|string',
            'last_name' => 'required| max:255|string',
            'phone'=> 'required|max:255',
            'company' => 'required',
            'email' => 'required|email|string|max:255|email:rfc,dns',
        ]);

        $employee = new Employee();

        $employee-> First_name = request('first_name');
        $employee-> last_name = request('last_name');
        $employee-> company = request('company');
        $employee->email= request('email');
        $employee->phone = request('phone');

        $employee->save();

            return redirect('/home');
    }

    public function edit($id1 ,$id){

            $company= company::find($id1);

            $data = Employee::find($id);

            //dd($data);
            return view('employee_edit',compact('data', 'company'));

    }

    public function update($id1, $id){

        $employee = Employee::find($id); 

        $employee-> First_name = request('first_name');
        $employee-> last_name = request('last_name');
        $employee-> email= request('email');
        $employee-> phone = request('phone');
      
        $employee->save();

        return redirect()->route('company',['companies'=>$id1]);
    }

    public function delete($id){
        $employee = Employee::find($id);

        $employee ->delete();

        return redirect()->back();
    }

   
    
}
