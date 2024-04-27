<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package Edit</title>
</head>
<body>

    <h1>Edit a Package</h1>
    <form method="POST" action="{{route('package.update', ['package' => $package])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Title" value="<?php echo $package->title; ?>"/>
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo $package->description; ?>">
        </div>        
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Price" value="<?php echo $package->price; ?>" />
        </div>
        <div>
            <input type="submit" value="Update Package" />
        </div>
    </form>
</body>
</html>
