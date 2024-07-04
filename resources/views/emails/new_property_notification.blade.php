<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Property Added</title>
</head>

<body>
    <h2>New Property Added</h2>
    <p>Hello Admin,</p>
    <p>A new property has been added:</p>

    <ul>
        <li><strong>Name:</strong> {{ $property->name }}</li>
        <li><strong>Price:</strong> ${{ number_format($property->price, 2) }}</li>
        <li><strong>Type:</strong> {{ ucfirst($property->type) }}</li>
        <!-- Add more property details as needed -->
    </ul>

    <p>Thank you!</p>
</body>

</html>