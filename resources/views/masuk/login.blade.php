<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>SMK NEGERI 1 TAMBAKBOYO</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <form action="{{ Route('login') }}" method="post">
      @csrf
      <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>SMK NEGERI 1 TAMBAKBOYO</h2>

          @if(session()->has('gagal_login'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('gagal_login') }}
            </div>
          @endif
 
          <div class="box-login">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="name">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password">
          </div>

          <button type="submit" class="btn-login">Login</button>
          <div class="bottom">
            <a href="{{ url('register') }}">Register</a>
          </div>
      </div>
    </form>
  </head>
  </html>