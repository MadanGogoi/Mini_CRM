@extends('layouts.app1')

@section('content')

    <div>
        <h1>
            Create a company
        </h1>
    </div>
    
    <form class ="row g-3" action="/company" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="col-md-4 ms-3">
            <label for="inputName" class="form-label"> Company Name </label>
            <input type="text" id="name" name ="name" class="form-control">
        </div>
        <div class="col-md-4 ms-3">
            <label for="inputEmail" class="form-label"> Company Email </label>
            <input type="email" class="form-control" id="email" name ="email">
        </div>
        <div class="col-8 ms-3">
            <label for="InputAddress" class="form-label"> Company Address </label>
            <input type="text" id="address" name ="address" class="form-control">
        </div>
        <div class="col-md-4 ms-3">
            <label for="InputPhone" class="form-label"> Company Phone </label>
            <input type="text" id="phone" name ="phone" class="form-control">
        </div>
        <div class="col-md-4 ms-3">
            <label for="InputWebsite" class="form-label"> Company Website </label>
            <input type="text" id="website" name ="website" class="form-control">
        </div>
        <div class="col-md-4 ms-3">
            <label for="InputLogo" class="form-label"> Company Logo </label>
            <input type="file" id="logo" name ="logo" class="form-control">
        </div>
        <div class="col-12 ms-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
            
@endsection
