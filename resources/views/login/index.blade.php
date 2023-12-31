<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Gegepedia | {{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <nav class="navbar navbar-light bg-success">
      <div class="container">
        <a href="/" class="text-decoration-none text-dark"><h1 class="d-inline">GegePedia.co.id</h1>
          <img src="img/gg.png" alt="" width="110" height="40%">
        </a>
      </div>
    </nav>
    
    <main class="form-signin">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-3">
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <form action="/login" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please Signin</h1>
        
            <div class="form-floating">
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
              <label for="floatingInput">Email address</label>
              @error('email')
              <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
              <label for="floatingPassword">Password</label>
              @error('password')
              <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> 
                Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
          </form>
          <small class="d-block text-center mt-2">
            Not Register <a href="/register" class="text-decoration-none">Register Now!</a>
        </small>
          <p class="mt-5 mb-3 text-muted fixed-bottom ">&copy; 2023–2024 | <a href="/" class="text-decoration-none">GegePedia</a></p>
        </div>
      </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
