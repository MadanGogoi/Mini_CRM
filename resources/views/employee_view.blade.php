@extends('layouts.app1')

@section('content')
 
        <div class ="ms-4 table-responsive me-4 mt-5">
            <table class="table table-hover">
                <thead class= "table table-dark">
                    <tr>
                        <th scope="col" class="w-25">Employee Name </th>
                        <th scope="col" class="w-25"> Employee Email </th>
                        <th scope= "col" class="w-25"> Contact No. </th>
                        <th scope= "col" class="w-25"> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employee as $item)
                        <tr>
                            <td>
                                {{ $item->First_name . " ". $item->Last_name }}
                            </td>
                            <td>
                                {{ $item -> email }}
                            </td>
                            <td>
                                {{ $item -> phone }}
                            </td>
                            <td>
                                <a href="/employee/{{$item->id}}/{{$item ->id}}/edit" class="mr-5">
                                    <button>
                                        Edit
                                    </button>
                                </a>

                                <a href="/employee/{{ $item ->id}}/delete" class="mr-5">
                                    <button>
                                        Delete
                                    </button>
                                </a>
                            </td>
                        </tr>      
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{ $employee -> links() }}
        </div>

@endsection