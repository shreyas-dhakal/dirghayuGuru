<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package</title>
</head>
<body>
    <h1>Package</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('package.create')}}">Create a Package</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($packages as $package)
                <tr>
                    <td>{{$package->id}}</td>
                    <td>{{$package->title}}</td>
                    <td>{{$package->description}}</td>
                    <td>{{$package->price}}</td>
                    
                    <td>
                        <a href="{{route('package.edit',['package' => $package])}}">Edit</a>
                    </td>
                    <td><form method="post" action="{{route('package.delete', ['package' => $package])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"></form></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>