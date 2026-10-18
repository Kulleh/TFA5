<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customer Accounts</a> |
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>

    <h1>About This Website</h1>
    <p>This Laravel application displays customer and user accounts.</p>
    <p>It uses controllers, static PHP arrays, and Blade views.</p>

</body>
</html>