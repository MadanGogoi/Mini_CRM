<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Edit </title>
</head>
<body> 
    <h1> Edit Form </h1>
    <Form method="POST" action="/employee/{{$company->id}}/{{$data->id }}">
        @csrf
        @method('PUT')

        <label for="Name">  First Name </label>
        <input type="text" id="first_name" name ="first_name" value = {{ $data->First_name}}> <br><br>
        <label for="Name"> Last Name </label>
        <input type="text" id="last_name" name ="last_name" value={{ $data->Last_name}}> <br><br>
        <label for="Name"> Email </label>
        <input type="text" id="email" name ="email" value={{ $data->email}}> <br><br>
        <label for="Name"> Phone Number  </label>
        <input type="text" id="phone" name ="phone" value={{ $data->phone }}> <br><br>
        
        <button type = "submit"> Submit </button>

        <a href="/employee/{{$company->id}}/{{$data->id }}">
            <button>
                Go Back
            </button>
        </a>
    </Form>
</body>
</html>