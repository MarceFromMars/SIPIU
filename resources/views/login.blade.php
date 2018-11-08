{{-- @extends('layout') --}}

{{-- @section('HOME') --}}

<!DOCTYPE html>
<html>
<head>
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
  <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="email" placeholder="email address"/>
      <button>create</button>
      <p class="message">¿Estás registrado? <a href="#">Entrar</a></p>
    </form>
    <form class="login-form"{{--  method="POST" action="\login" --}}>
    {!! csrf_field() !!}
      <input type="email" placeholder="Email" name="email" />
      <input type="password" placeholder="password" name="password" />
      <button type="submit">login</button>
      <p class="message">¿No estás registrado? <a href="#">Crea tu cuenta aquí</a></p>
    </form>
  </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>

{{-- @endsection --}}