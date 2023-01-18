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
          <img src="/img/ugPolice.png" height="80px" width="80px" alt="ugPolice">
          <h2>CSRMS</h2>        
        </nav>
        <main>
            <ul class="sideNav">
              <li>
                <a href="{{route('home.dashboard')}}">Dashboard</a>
                </li>
              <li><a href="{{route('cases.index')}}">Case</a></li>
              <li><a href="{{route('suspects.index')}}">Suspects</a></li>
              <li><a href="{{route('home.reports')}}">reports</a></li>
            </ul>

            <div class="content">
              @yield('content')
      
            </div>
          </main>
         
    </div>
    
</body>
</html>