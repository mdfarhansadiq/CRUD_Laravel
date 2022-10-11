<!DOCTYPE html>
<html>

<head>
    <title>Laravel Learning</title>
</head>

<body>
    <h1>Welcome to Laravel Journey</h1>
    <form method="POST" action="{{url('/home_create')}}">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="salary">Salary:</label><br>
        <input type="text" id="salary" name="salary"><br>
        <button type="submit">Submit</button>
    </form>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><strong> Serial No. </strong></th>
                    <th><strong> Name </strong></th>
                    <th><strong> Email </strong></th>
                    <th><strong> Salary </strong></th>
                    <th><strong> Action </strong></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $d)
                <tr>
                    <td>{{ $l->iteration }}</td>
                    <td>{{ $d->name}}</td>
                    <td>{{ $d->email}}</td>
                    <td>{{ $d->salary}}</td>
                    <td><a href="{{url('home_show', $d['id'])}}">Edit</a></td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
