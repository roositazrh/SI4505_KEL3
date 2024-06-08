<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/css/login.css">
</head>
<body>
  <div class="content-wrapper">
    <div class="container-1">
      <div class="title-1">
        Login
      </div>
      <div class="title-1-desc">
        Masuk ke dalam akun admin
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $item)
                  <li>{{ $item }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      <form action="" method="POST">
        @csrf
        <input type="email" class="login-email" value="{{ old('email') }}" name="email" placeholder="Email">
        <input type="password" class="login-pw" name="password" placeholder="Password">
        <button name="submit" type="submit" class="bt-signin"> Sign In</button>
      </form>
    </div>
    <div class="container-2">
      <div class="title-2">
        Selamat Datang
      </div>
      <div class="title-2-desc">
        Daftarkan akun anda jika anda belum memiliki akun
      </div>
      <div class="bt-signup">
        <a href="{{ route('register') }}" class="text-bt-signup">Sign Up</a>
      </div>
    </div>
  </div>
</body>
</html>
