<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Edit a Department</h1>
    <form method="POST" action="{{route('department.update', ['department' => $department])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" value="<?php echo $department->name; ?>"/>
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image" value="<?php echo $department->image; ?>">
        </div>        
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo $department->description; ?>" />
        </div>
        <div>
            <input type="submit" value="Update Department" />
        </div>
    </form>
</body>
</html>
