<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customer Accounts</a> |
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>

    <h1>Welcome to Account Management</h1>
    <p>Use the navigation links to view customer and user accounts.</p>

</body>
</html>