<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting Create</title>
</head>
<body>

    <h1>Create a Setting</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('sitesetting.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="logo">Logo</label>
            <input type="file" id="logo" name="logo">
        </div>
        
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name">
        </div>
        
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Address">
        </div>
        
        <div>
            <label for="email1">Email 1</label>
            <input type="email" id="email1" name="email1" placeholder="Email 1">
        </div>
        
        <div>
            <label for="email2">Email 2</label>
            <input type="email" id="email2" name="email2" placeholder="Email 2">
        </div>
        
        <div>
            <label for="phone_number1">Phone Number 1</label>
            <input type="tel" id="phone_number1" name="phone_number1" placeholder="Phone Number 1">
        </div>
        
        <div>
            <label for="phone_number2">Phone Number 2</label>
            <input type="tel" id="phone_number2" name="phone_number2" placeholder="Phone Number 2">
        </div>
        
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        
        <div>
            <label for="link1">Link 1</label>
            <input type="url" id="link1" name="link1" placeholder="Link 1">
        </div>
        
        <div>
            <label for="link2">Link 2</label>
            <input type="url" id="link2" name="link2" placeholder="Link 2">
        </div>
        
        <div>
            <label for="link3">Link 3</label>
            <input type="url" id="link3" name="link3" placeholder="Link 3">
        </div>
           
        <div>
            <input type="submit" value="Save Settings" >
        </div>
    </form>
</body>
</html>