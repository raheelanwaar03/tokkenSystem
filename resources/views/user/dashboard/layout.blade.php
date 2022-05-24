<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
              <nav class="navbar1 navbar-light bg-primary">
                  <ul class="nav-list">
                    <li class="nav-list-item"><a href="{{ route('user.dashboardindex.index') }}" class="text-light">Dashboard</a></li>
                    <li class="nav-list-item mt-3"><a href="{{ route('user.dashboardCounter.index') }}" class="text-light">Counter</a></li>
                    <li class="nav-list-item mt-3"><a href="#" class="text-light">Tokken</a></li>
                    <li class="nav-list-item mt-5">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                  </ul>
              </nav>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
    <x-alert />>
</body>
</html>
