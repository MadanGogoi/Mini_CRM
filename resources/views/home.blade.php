@extends('layouts.app')

@section('content')
    <div class ="d-flex">
        <div class = "flex-grow-1">
            <h1 class ="fs-1 fw-bolder badge bg-primary text-wrap">
                Companies List
            </h1>
        
        </div>
        <div class= "text-right">
            <div class="fs-5">
                <a href="/company" class="rounded">
                    Create Company
                </a>
                <a href="/employee" class = "mx-4 text-3xl rounded">
                    Add Employee
                </a>
            </div>
        </div>
    </div>


    <div>
        @foreach ($companies as $company)
        <div class="d-flex mt-4">
            <div class="p-2 flex-grow-1 ml-4">
                <a href="/company/{{$company->id}}/show" >
                    <h1 >
                        {{ $company->name }} 
                    </h1>
                </a>
            </div>
            
            <div class = "justify-content-end">
                <a href="/company/{{ $company->id}}/edit" class="mr-5">
                    <button>
                        Edit
                    </button>
                </a>

                <a href="/company/{{ $company->id}}/delete" class="mr-5">
                    <button>
                        Delete
                    </button>
                </a>
            </div>
        </div>    
    @endforeach
    </div>
       
    
<div>
    <h2>
        {{ $companies -> links() }}
    </h2>
</div>
@endsection
