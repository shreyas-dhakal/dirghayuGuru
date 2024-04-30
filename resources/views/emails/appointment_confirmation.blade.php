<!-- resources/views/emails/appointment_confirmation.blade.php -->

<p>Dear {{ $data['name'] }},</p>

<p>Your appointment has been confirmed. Here are the details:</p>

<ul>
    <li>Name: {{ $data['name'] }}</li>
    <li>Gender: {{ $data['gender'] }}</li>
    <li>Email: {{ $data['email'] }}</li>
    <li>Phone: {{ $data['phone'] }}</li>
    <li>Department: {{ $data['department']->name }}</li>
    <li>Doctor: {{ $data['doctor']->name }}</li>
</ul>

<p>Thank you for booking with us. We will contact you shortly regarding the appointment.</p>
