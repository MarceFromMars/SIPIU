<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="/css/login.css">
  <link rel="stylesheet" href="/css/app.css">
  <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>

<div class="login-page_2">
  
  <h1>Título de la aplicación</h1>

</div>

<div class="login-page">
  <div class="form">
    <p id="welcome">¡Bienvenido!</p>
    <form class="login-form" form method="POST" action="{{ route('login') }}" >
    {!! csrf_field() !!}
      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      <button type="submit" value="login">
      </button>
    </form>
  </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>

