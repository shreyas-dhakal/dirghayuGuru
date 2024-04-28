<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimonial Edit</title>
</head>
<body>

    <h1>Edit a Testimonial</h1>
    <form method="POST" action="{{route('testimonial.update', ['testimonial' => $testimonial])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Title" value="<?php echo $testimonial->title; ?>"/>
        </div>
        <div>
            <label for="">Designation</label>
            <input type="text" name="designation" placeholder="Designation" value="<?php echo $testimonial->designation; ?>"/>
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo $testimonial->description; ?>">
        </div>        
        <div>
            <label for="">Image</label>
            <input type="file" name="image" value="<?php echo $testimonial->image; ?>" />
        </div>
        <div>
            <input type="submit" value="Update Testimonial" />
        </div>
    </form>
</body>
</html>
