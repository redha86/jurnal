<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>SMK NEGERI 1 TAMBAKBOYO</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <form action="{{ Route('register') }}" method="post">
      @csrf
      <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>SMK NEGERI 1 TAMBAKBOYO</h2>

          <div class="box-login">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Username" id="name" name="name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" placeholder="Email" id="email" name="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password" name="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password confirm" id="password_confirm" name="password_confirmation">
          </div>

          <button type="submit" class="btn-login">Register</button>
      </div>
    </form>
  </head>
  </html>