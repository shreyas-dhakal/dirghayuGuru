<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor</title>
</head>
<body>
    <h1>Doctor</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{ route('doctor.create') }}">Create a doctor</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Image</th>
                <th>Description</th>
                <th>Department</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->designation }}</td>
                    <td>{{ $doctor->image }}</td>
                    <td>{{ $doctor->description }}</td>
                    <td>{{ $doctor->department->name }}</td> <!-- Display department name instead of ID -->
                    <td>
                        <a href="{{ route('doctor.edit', ['doctor' => $doctor]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('doctor.delete', ['doctor' => $doctor]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
