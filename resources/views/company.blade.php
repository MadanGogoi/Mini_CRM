@extends('layouts.style_for_all')

@section('content')

    <div>
        <h1>
            Create a company
        </h1>
        
            <Form method="POST" action="/company" enctype="multipart/form-data">
                @csrf
                <div class ="form-group">
                    <label for="Name"> Company Name </label>
                    <input type="text" id="name" name ="name"> <br><br>
                    <label for="email"> Company Email </label>
                    <input type="text" id="email" name ="email"> <br><br>
                    <label for="Logo">Logo </label>
                    <input type="file" id="file" name="file"><br><br>
                    <label for="Website"> Website</label>
                    <input type="text" id="website" name="website"><br><br>
            
                    <button type = "submit"> Submit </button>
                </div>
            </Form>
    </div>
    
@endsection
