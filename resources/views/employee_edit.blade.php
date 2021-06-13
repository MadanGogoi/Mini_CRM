@extends('layouts.app1')

@section('content')

    <div class ="ms-3">
        <h4>
            Edit Form
        </h4>
    </div>

    <form action="/employee/{{$company->id}}/{{$data->id }}" class="row g-3" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-4 ms-3">
            <label for="inputFirstName" class="form-label"> First Name </label>
            <input type="text" id="first_name" name ="first_name" value = {{ $data->First_name }} class="form-control">
        </div>

        <div class="col-md-4">
            <label for="inputLastName" class="form-label"> Last Name </label>
            <input type="text" id="last_name" name ="last_name" value={{ $data->Last_name }} class="form-control">
        </div>

        <div class="col-md-4 ms-3">
            <label for="inputp" class="form-label"> Email </label>
            <input type="email" id="email" name ="email" value={{ $data->email }} class="form-control">
        </div>

        <div class="col-md-4">
            <label for="mobileNumber" class="form-label"> Mobile No. </label>
            <input type="text" id="phone" name ="phone" value={{ $data->phone }} class="form-control">
        </div>

        <div class="col-12 ms-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection