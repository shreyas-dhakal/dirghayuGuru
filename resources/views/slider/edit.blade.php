<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slider Edit</title>
</head>
<body>

    <h1>Edit a Slider</h1>
    <form method="POST" action="{{route('slider.update', ['slider' => $slider])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Title" value="<?php echo $slider->title; ?>"/>
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo $slider->description; ?>">
        </div>        
        <div>
            <label for="">Image</label>
            <input type="file" name="image" value="<?php echo $slider->image; ?>" />
        </div>
        <div>
            <input type="submit" value="Update Slider" />
        </div>
    </form>
</body>
</html>
