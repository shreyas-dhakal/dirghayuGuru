<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimonial</title>
</head>
<body>
    <h1>Testimonial</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('testimonial.create')}}">Create a Testimonial</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Designation</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <td>{{$testimonial->id}}</td>
                    <td>{{$testimonial->title}}</td>
                    <td>{{$testimonial->description}}</td>
                    <td>{{$testimonial->designation}}</td>
                    <td>{{$testimonial->image}}</td>
                    
                    <td>
                        <a href="{{route('testimonial.edit',['testimonial' => $testimonial])}}">Edit</a>
                    </td>
                    <td><form method="post" action="{{route('testimonial.delete', ['testimonial' => $testimonial])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"></form></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>