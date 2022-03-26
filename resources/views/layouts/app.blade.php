<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body style="background-color: gray-400">


<nav class="navbar navbar-expand-lg bg-white mb-3">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Post</a>
        </li>
      </ul>

      <ul class="navbar-nav mb-2 mb-lg-0">
        @auth
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Monayem</a>
          </li>
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="nav-link" type="submit">Logout</button>
            </form>
          </li>
        @endauth
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Log In</a>
          </li>
        @endguest
        
      </ul>
      
    </div>
  </div>
</nav>


    @yield('content')
</body>
</html>