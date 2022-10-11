<!DOCTYPE html>
<html>

<head>
    <title>Laravel Learning</title>
</head>

<body>
    <h1>Welcome to Laravel Journey</h1>
    <form method="POST" action="/home_update/{{$data['id']}}">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value={{$data->name}}><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value={{$data->email}}><br>
        <label for="salary">Salary:</label><br>
        <input type="text" id="salary" name="salary" value={{$data->salary}}><br>
        <button type="submit">Submit</button>
    </form>


</body>

</html>
