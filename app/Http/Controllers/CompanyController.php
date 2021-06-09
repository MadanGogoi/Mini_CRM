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
            'file' => 'file|dimensions:min_width=100,min_height= 100',
            'website' => 'required|max:255',
        ]);
            
        $company = new company();

        if(request('file')){
            $company->logo = request('file')->store('/');
        }
        $company -> name = request('name');
        $company -> email = request('email');
        $company -> website = request('website');
        $company-> isadmin = auth()->id(); 
        $company->save();

        return redirect('/home');
    }

    public function edit($id){
        $data = company::find($id);
        //dd($data);

       
        //dd($data1);

        return view('company_edit',compact('data'));
    }

    public function update($id){

        $company = company::find($id); 

        //dd($data);
        
        $company -> name = request('name');
        $company -> email = request('email');
        $company-> website = request('website');
        $company->save();

        return redirect('/home');
    }

    public function delete($id){
        $company = company::find($id);

        $company-> delete();

        return redirect('/home');
    }

    public function show($id){
        $company = company::find($id);
        //dd($company);
        $data = Employee::where('company',$id)->paginate(10);

        //dd($data);
        return view('company_dashboard',compact('company','data'));
    }

    
}
