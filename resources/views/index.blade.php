<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h3>Menu</h3>
    <ul>
        <li><a href="{{ route('visitors.create') }}">Logbook </a></li>
        <li><a href="{{ route('visitors.showAll') }}">History</a></li>
        <li><a href="{{ route('visitors.foredit') }}">Update</a></li>
    </ul>
</body>
</html>