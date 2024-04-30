<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointments</title>
</head>
<body>
    <h1>Appointments</h1>
    <ul>
        @foreach ($appointments as $appointment)
            <li>{{ $appointment->name }} - {{ $appointment->email }} - {{ $appointment->phone }}</li>
        @endforeach
    </ul>
</body>
</html>
