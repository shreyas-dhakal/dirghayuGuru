<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Edit</title>
</head>
<body>

    <h1>Edit a User</h1>
    <form method="POST" action="{{route('user.update', ['user' => $user])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="title" placeholder="Name" value="<?php echo $user->name; ?>"/>
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Email" value="<?php echo $user->email; ?>"/>
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password" value="<?php echo $user->password; ?>">
        </div>        
        <div>
            <input type="submit" value="Update User" />
        </div>
    </form>
</body>
</html>
