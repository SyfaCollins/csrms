<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/case.css') }}" rel="stylesheet" type="text/css" >
    <title>@yield('title')</title>
</head>
<body>
    <div class="layout">
        <nav class="topNav">
            <h1 style="font: 500">LOGO</h1>
            <button>
                <a href="/login"></a>
                Login</button>
        </nav>
        <main>
            <ul class="sideNav">
              <li>
                <a href="{{route('home.dashboard')}}">Dashboard</a>
                </li>
              <li><a href="{{route('cases.index')}}">Case</a></li>
              <li><a href="{{route('home.suspects')}}">Suspects</a></li>
              <li><a href="{{route('home.index')}}">police stations</a></li>
              <li><a href="">officers</a></li>
              <li><a href="{{route('home.reports')}}">reports</a></li>
            </ul>

            <div class="content">
              @yield('content')
      
            </div>
          </main>
         
    </div>
    
</body>
</html>