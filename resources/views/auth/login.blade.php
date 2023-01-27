<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" >
  <!-- <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" > -->

</head>
<body>
  <main>
    <nav class="topNav">
      <div class="logo">
      <img src="/img/ugPolice.png" height="80px" width="80px" alt="ugPolice">
      <h2>CSRMS</h2>
      </div>
     
      
      <div>
        <button><a  href="{{route('register')}}">Register</a> </button>
      </div>
    </nav>

    <div class="form">

      <form action="{{route('login')}}" method="POST">

        @csrf

          <h1>
          Login Here
          </h1>

          <div>
            @if (session('status'))
                {{session('status')}}
            @endif
          </div>
        
          <div class="bg-red">
            <input type="email" placeholder="Enter email" name="email" required><br><br>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>
            <input type="submit" class="loginbtn" value="login">
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
        
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
    </div>

  </main>
</body>
</html>