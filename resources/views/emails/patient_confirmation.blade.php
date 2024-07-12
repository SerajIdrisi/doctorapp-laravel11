<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Appointment Confirmation</title>
</head>
<body>
    <h1>Appointment Confirmation</h1>
    {{-- @php echo '<pre>';print_r($appointment);exit;@endphp --}}
    <p>Dear {{ $appointment->name }},</p>
    <p>Your appointment with Dr. {{ $appointment->doctor }} is confirmed for {{ $appointment->day_of_appointment }} at
        {{ $appointment->time }}.</p>

</body>

</html>
