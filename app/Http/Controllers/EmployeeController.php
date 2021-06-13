<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create(){

        $data = company::where('user_id',auth()->id())->get();
        return view('/employee', ['datas' => $data ]);
    }

    public function store(){

        //dd(request()->all());

        request()->validate([
            'first_name' => 'required| max:255|string',
            'last_name' => 'required| max:255|string',
            'phone'=> 'required|max:255|digits:10',
            'company_id' => 'required|exists:App\Models\company,id',
            'email' => 'required|email|string|max:255|email:rfc,dns',
        ]);

        $employee = new Employee();

        $employee-> First_name = request('first_name');
        $employee-> last_name = request('last_name');
        $employee-> company = request('company_id');
        $employee->email= request('email');
        $employee->phone = request('phone');

        $employee->save();

            return redirect('/employee/show');
    }

    public function edit($id1 ,$id){

            $company = company::find($id1);

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

        return redirect('/employee/show');
    }

    public function delete($id){
        $employee = Employee::find($id);

        $employee ->delete();

        return redirect()->back();
    }

    public function show(){
        $employee = Employee::paginate(10);
        //dd($employee);
        return view('/employee_view', compact('employee'));
    }

   
    
}
