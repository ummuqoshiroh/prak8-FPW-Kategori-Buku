<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
</head>
<body>
  <h1>Halaman Login</h1>

  <div>
    <form action="{{ route('login.post') }}" method="POST" style="display:inline-block;">
      @csrf
      <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <button type="submit">Login</button>
    </form>
    <p>belum punya akun? <a href="{{ route('register') }}">Register</a></p>
  </div>
</body>
</html>
