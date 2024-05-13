<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/css/register.css">
</head>
<body>
  <div class="content-wrapper">
    <div class="container-1">
      <div class="title-1">
        Registration
      </div>
      <div class="title-1-desc">
        Masukkan data diri anda untuk membuat akun
      </div>
      @if(session('message'))
      <div class="alert alert-success">
          {{session('message')}}
      </div>
      @endif
      <form action="" method="POST">
      @csrf
        <input type="nama" class="regis-nama" name="name" placeholder="Full Name">
        <input type="email" class="regis-email" name="email" placeholder="Email">
        <input type="password" class="regis-pw" name="password" placeholder="Password">
        <button name="submit" type="submit" class="bt-signup"> Sign Up</button>
      </form>
    </div>
    <div class="container-2">
      <div class="title-2">
        Sudah Memiliki akun?
      </div>
      <div class="title-2-desc">
        Masuk ke halaman Sign In apabila anda sudah memiliki akun
      </div>
      <div class="bt-signin">
        <a href="{{ route('login') }}" class="text-bt-signin">Sign In</a>
      </div>
    </div>
  </div>
</body>
</html>
