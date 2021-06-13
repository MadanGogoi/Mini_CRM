@extends('layouts.app1')

@section('content')
    <h1 class="ms-3">
        Add an Employee
    </h1>
    <form action="/employee" class="row g-3" method="POST">
        @csrf

        <div class="col-md-4 ms-3">
            <label for="inputFirstName" class="form-label"> First Name </label>
            <input type="text" id="first_name" name ="first_name" class="form-control">
        </div>

        <div class="col-md-4">
            <label for="inputLastName" class="form-label"> Last Name </label>
            <input type="text" id="last_name" name ="last_name" class="form-control">
        </div>

        <div class="col-md-4 ms-3">
            <label for="inputp" class="form-label"> Email </label>
            <input type="email" id="email" name ="email" class="form-control">
        </div>

        <div class="col-md-4">
            <label for="mobileNumber" class="form-label"> Mobile No. </label>
            <input type="text" id="phone" name ="phone" class="form-control">
        </div>
        
        <div class="col-md-4 ms-3">
            <label for="companySelect" class="form-label"> Company </label>
            <select class="form-select" name="company_id" id="company">
                <option selected> Choose a company</option>
                @foreach($datas as $data)
                    <option value="{{ $data->id }} ">
                        {{ $data->name }}
                    </option> 
                @endforeach
            </select>
        </div>

        <div class="col-12 ms-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection