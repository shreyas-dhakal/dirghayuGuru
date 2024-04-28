<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting Edit</title>
</head>
<body>

    <h1>Edit a Setting</h1>
    <form method="POST" action="{{route('sitesetting.update', ['sitesetting' => $sitesetting])}}">
        @csrf
        @method('put')
        <div>
            <label for="logo">Logo</label>
            <input type="file" id="logo" name="logo" value="<?php echo $sitesetting->logo; ?>">
        </div>
        
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $sitesetting->name; ?>">
        </div>
        
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?php echo $sitesetting->address; ?>">
        </div>
        
        <div>
            <label for="email1">Email 1</label>
            <input type="email" id="email1" name="email1" value="<?php echo $sitesetting->email1; ?>">
        </div>
        
        <div>
            <label for="email2">Email 2</label>
            <input type="email" id="email2" name="email2" value="<?php echo $sitesetting->email2; ?>">
        </div>
        
        <div>
            <label for="phone_number1">Phone Number 1</label>
            <input type="tel" id="phone_number1" name="phone_number1" value="<?php echo $sitesetting->phone_number1; ?>">
        </div>
        
        <div>
            <label for="phone_number2">Phone Number 2</label>
            <input type="tel" id="phone_number2" name="phone_number2" value="<?php echo $sitesetting->phone_number2; ?>">
        </div>
        
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" value="<?php echo $sitesetting->image; ?>">
        </div>
        
        <div>
            <label for="link1">Link 1</label>
            <input type="url" id="link1" name="link1" value="<?php echo $sitesetting->link1; ?>">
        </div>
        
        <div>
            <label for="link2">Link 2</label>
            <input type="url" id="link2" name="link2" value="<?php echo $sitesetting->link2; ?>">
        </div>
        
        <div>
            <label for="link3">Link 3</label>
            <input type="url" id="link3" name="link3" value="<?php echo $sitesetting->link3; ?>">
        </div>
           
        <div>
            <input type="submit" value="Update Setting" />
        </div>
    </form>
</body>
</html>