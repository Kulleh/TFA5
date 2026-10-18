<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Accounts</title>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customer Accounts</a> |
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>

    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['full_name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>