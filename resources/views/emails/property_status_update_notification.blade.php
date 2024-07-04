<!DOCTYPE html>
<html>

<head>
    <title>Property Status Update Notification</title>
</head>

<body>
    <h2>Property Status Update Notification</h2>
    <p>Hello {{ $property->user->name }},</p>

    <p>Your property "{{ $property->name }}" has been {{ $status }} by an administrator.</p>

    <p>Thank you!</p>
</body>

</html>