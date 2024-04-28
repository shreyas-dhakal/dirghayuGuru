<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Create</title>
</head>
<body>

    <h1>Create a Doctor</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data"> <!-- Added enctype for file upload -->
        @csrf
        @method('post')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label for="">Designation</label>
            <input type="text" name="designation" placeholder="Designation">
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image">
        </div>        
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description">
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
            <input type="submit" value="Save doctor">
        </div>
    </form>
</body>
</html>
