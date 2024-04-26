<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department</title>
</head>
<body>
    <h1>Department</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('department.create')}}">Create a Department</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($departments as $department)
                <tr>
                    <td>{{$department->id}}</td>
                    <td>{{$department->name}}</td>
                    <td>{{$department->image}}</td>
                    <td>{{$department->description}}</td>
                    <td>
                        <a href="{{route('department.edit',['department' => $department])}}">Edit</a>
                    </td>
                    <td><form method="post" action="{{route('department.delete', ['department' => $department])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"></form></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>