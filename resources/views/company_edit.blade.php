@extends('layouts.style_for_all')

@section('content')
    <body>
            <form action="/company/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')

                <label for="Name"> Company Name </label>
                <input type="text" id="name" name ="name" value = " {{ $data->name }} "> <br><br>
                <label for="email"> Company Email </label>
                <input type="text" id="email" name ="email" value = " {{ $data->email }} "> <br><br>
                <label for="Logo">Logo </label>
                <input type="file" id="file" name="file"><br><br>
                <label for="website">Website </label>
                <input type="text" id="website" name="website" value="{{ $data->website }}"><br><br>

    
                <button type = "submit"> Submit </button>

                <a href="/dashboard">
                    <button>
                        Go Back
                    </button> 
                </a>
            </form>
    </body>
@endsection