<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Confirmation</title>
</head>

<body> 
        <!-- resources/views/emails/doctor_confirmation.blade.php -->
    <h1>New Appointment</h1>
    {{-- @php echo '<pre>';print_r($appointment);exit;@endphp --}}
    <p>Dear Dr. {{ $appointment->doctor }},</p>
    <p>You have a new appointment with {{ $appointment->name }} on {{ $appointment->day_of_appointment }} at
        {{ $appointment->time }}.</p>

</body>

</html>
