<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slider</title>
</head>
<body>
    <h1>Slider</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('slider.create')}}">Create a Slider</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($sliders as $slider)
                <tr>
                    <td>{{$slider->id}}</td>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->description}}</td>
                    <td>{{$slider->image}}</td>
                    
                    <td>
                        <a href="{{route('slider.edit',['slider' => $slider])}}">Edit</a>
                    </td>
                    <td><form method="post" action="{{route('slider.delete', ['slider' => $slider])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"></form></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>