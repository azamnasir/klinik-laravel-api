<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Reservation Notification</title>
</head>
<body>
    <h2>Appointment Reservation Notification</h2>
    <p>Dear {{ $appointment->user->name }},</p>
    <p>Your appointment has been reserved with the following details:</p>
    <ul>
        <li>Doctor: {{ $appointment->doctor->name }}</li>
        <li>Date: {{ \Carbon\Carbon::parse($appointment->date)->format('F j, Y') }}</li>
        <li>Time: {{ \Carbon\Carbon::parse($appointment->start_time)->format('g:i A') }} - {{ \Carbon\Carbon::parse($appointment->end_time)->format('g:i A') }}</li>
    </ul>
    <p>Thank you,<br>Ibrahim Afzal Clinic</p>  
</body>
</html>
