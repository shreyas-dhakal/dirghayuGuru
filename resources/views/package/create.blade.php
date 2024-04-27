<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package Create</title>
</head>
<body>

    <h1>Create a Package</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('package.store')}}">
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
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Price">
        </div>        
        <div>
            <input type="submit" value="Save Package" >
        </div>
    </form>
</body>
</html>