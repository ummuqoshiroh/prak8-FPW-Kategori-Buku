<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('register.post') }}" method="POST">
        @csrf
        <div>
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @if ($errors->has('name')) <p style="color:red">{{ $errors->first('name') }}</p> @endif
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @if ($errors->has('email')) <p style="color:red">{{ $errors->first('email') }}</p> @endif
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
            @if ($errors->has('password')) <p style="color:red">{{ $errors->first('password') }}</p> @endif
        </div>
        <div>
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation">
        </div>
        <button type="submit">Register</button>
    </form>
    <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
</body>
</html>
