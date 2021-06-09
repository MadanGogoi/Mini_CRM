<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Add an Employee
    </h1>
    <Form method="POST" action="/employee/">
        @csrf
        <label for="Name">  First Name </label>
        <input type="text" id="first_name" name ="first_name"> <br><br>
        <label for="Name"> Last Name </label>
        <input type="text" id="last_name" name ="last_name"> <br><br>
        <label for="Name"> Email </label>
        <input type="text" id="email" name ="email"> <br><br>
        <label for="Name"> Phone Number  </label>
        <input type="text" id="phone" name ="phone"> <br><br>

        <label for="company"> Select Company </label>

        <select name="company" id="company">
            @foreach($datas as $data)
                <option value=" {{ $data->id }} ">
                    {{ $data->name }}
                </option> 
            @endforeach
        </select>
        <br>

        <button type = "submit"> Submit </button>
    </Form>
</body>
</html>