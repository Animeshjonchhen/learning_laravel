<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid bg-light">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <ul class="d-flex justify-content-start" style="list-style-type:none">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="p-3">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('posts') }}" class="p-3">Post</a>
                    </li>
                </ul>
  
                <ul class="d-flex justify-content-end" style="list-style-type:none">
                    
                    @if (auth()->user())

                        <li class="nav-item">
                            <a href="" class="p-3"> {{ auth()->user()->name }} </a>
                        </li>
                            
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-light">Logout</button>
                            </form>
                        </li>

                    @else

                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="p-3">Login</a>
                        </li>
                    
                        <li class="nav-item">
                            <a href="{{ route('register')}}" class="p-3">Register</a>
                        </li>
                        
                    @endif    

                </ul>
            </div>
        </nav>
    </div>
    @yield('content')
</body>
</html>