<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use App\Models\Employee;

class CompanyController extends Controller
{
    public function create(){
        return view('company');
    }

    public function store(){

        //dd(request()->all());
        request()->validate([
            'name' => 'required| max:255',
            'email' => 'required|email|max:255|string|email:rfc,dns',
            'address' => 'required| max:255|string|alpha_dash',
            'file' => 'file',
            'phone'=> 'required|digits:10',
            'website' => 'required|max:255',
        ]);
            
        $company = new company();

    
        $company->logo = request('file')->store('/');
        $company -> name = request('name');
        $company -> email = request('email');
        $company -> website = request('website');
        $company-> user_id = auth()->id();
        $company -> address = request('address');
        $company->phone = request('phone');
        $company->save();

        return redirect('/');
    }

    public function edit($id){
        $data = company::find($id);

        return view('company_edit',compact('data'));
    }

    public function update($id){

        $company = company::find($id); 

        
    //$company->logo = request('file')->store('/');
    
        
        $company -> name = request('name');
        $company -> email = request('email');
        $company-> website = request('website');
        $company -> address = request('address');
        $company -> phone = request('phone');

        $company->save();

        return redirect('/');
    }

    public function delete($id){
        $company = company::find($id);

        $company-> delete();

        return redirect('/home');
    }
    
}
