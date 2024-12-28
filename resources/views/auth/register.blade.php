<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Register</title>
</head>
<body>
<div class="container">
    <h1>Register</h1>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        <label>Password:</label>
        <input type="password" name="password">
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation">
        <button type="submit">Register</button>
    </form>
</div>
</body>
</html>
