<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Settings</title>
</head>
<body>
    <h1>Site Settings</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('sitesetting.create')}}">Create a Setting</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Logo</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email 1</th>
                <th>Email 2</th>
                <th>Phone Number 1</th>
                <th>Phone Number 2</th>
                <th>Image</th>
                <th>Link 1</th>
                <th>Link 2</th>
                <th>Link 3</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($sitesettings as $sitesetting)
            <tr>
                <td>{{$sitesetting->id}}</td>
                <td>{{$sitesetting->logo}}</td>
                <td>{{$sitesetting->name}}</td>
                <td>{{$sitesetting->address}}</td>
                <td>{{$sitesetting->email1}}</td>
                <td>{{$sitesetting->email2}}</td>
                <td>{{$sitesetting->phone_number1}}</td>
                <td>{{$sitesetting->phone_number2}}</td>
                <td>{{$sitesetting->image}}</td>
                <td>{{$sitesetting->link1}}</td>
                <td>{{$sitesetting->link2}}</td>
                <td>{{$sitesetting->link3}}</td>
                <td>
                    <a href="{{route('sitesetting.edit',['sitesetting' => $sitesetting])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('sitesetting.delete', ['sitesetting' => $sitesetting])}}">
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