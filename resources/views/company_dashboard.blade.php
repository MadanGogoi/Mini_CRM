@extends('layouts.style_for_all')

@section('content')
    <div class ="mx-4">
        <a href="/home"> Go Back</a>
        <h1>
            Company Name : {{ $company->name }}
        </h1>
        <h1>
            Company Website : {{ $company->website }}
        </h1>
    </div>

    <div>
        <h1 class = "mx-4">
            Employee List
        </h1>
    </div>
        
        <table class ="table">
            <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Options</th>
                </tr>
              </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>
                            <div  class = "mx-4">
                                <h1>
                                    {{ $item->First_name. ' '. $item->Last_name }} 
                                </h1>
                            </div>
                        </td>
                        <td>
                            <div class="flex-grow-1">
                                <h1>
                                    {{ $item-> phone}}
                                </h1>
                            </div> 
                        </td>
                        <td>
                            <div class =" d-flex justify-end">
                                <a href="/employee/{{$company->id}}/{{ $item ->id}}/edit" class="mx-5">
                                    <button>
                                        Edit
                                    </button>
                                </a>
                                <a href="/employee/{{ $item ->id}}/delete">
                                    <button>
                                        Delete
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div>       

    <div>
        {{ $data -> links() }}
    </div>
    
@endsection