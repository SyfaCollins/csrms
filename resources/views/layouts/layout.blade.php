<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" >
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
        <nav class="sideNav">
            <ul class="list-disc">
              <li>
                <a href="/dashboard">Dashboard</a>
                </li>
              <li><a href="/case">Case</a></li>
              <li><a href="/suspects">Suspects</a></li>
              <li><a href="/police stations">police stations</a></li>
              <li><a href="/officers">officers</a></li>
              <li><a href="/reports">reports</a></li>
            </ul>
          </nav>
          <div>
            @yield('content')
    
          </div>
    </div>
    
</body>
</html>