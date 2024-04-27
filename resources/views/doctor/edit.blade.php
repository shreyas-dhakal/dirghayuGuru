<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Edit</title>
</head>
<body>

    <h1>Edit a Doctor</h1>
    <form method="POST" action="{{route('doctor.update', ['doctor' => $doctor])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" value="<?php echo $doctor->name; ?>"/>
        </div>
        <div>
            <label for="">Designation</label>
            <input type="text" name="designation" placeholder="Designation" value="<?php echo $doctor->designation; ?>">
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image" value="<?php echo $doctor->image; ?>">
        </div>        
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo $doctor->description; ?>" />
        </div>
        <div>
            <label for="">Department</label>
            <select name="department_id">
                <option value="">Select Department</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Update doctor" />
        </div>
    </form>
</body>
</html>
