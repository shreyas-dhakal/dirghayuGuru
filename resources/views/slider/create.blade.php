<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slider Create</title>
</head>
<body>

    <h1>Create a Slider</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('slider.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Title">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description">
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image">
        </div>      
        <div>
            <input type="submit" value="Save Slider" >
        </div>
    </form>
</body>
</html>