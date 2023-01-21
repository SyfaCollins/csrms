<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" >

</head>
<body>
  <main>
    <nav class="topNav">
      <img src="/img/ugPolice.png" height="80px" width="80px" alt="ugPolice">
      <h2>CSRMS</h2>        
    </nav>

    <div class="form">

      <form action="/register" method="post">
        @csrf
          <h1>
          Register Here
          </h1>
         <div>
          <input type="text" placeholder="Enter name" name="name" value="{{old('name')}}">
         </div>
         <div>
         <input type="email" placeholder="Enter email" name="email" value="{{old('email')}}">
        </div>
        <div>
        <input type="password" placeholder="enter password" name="password">
          </div>
          <div>
            <input type="password" placeholder="Confirm password" name="password" >
              </div>
            <button type="submit" class="register">Register</button>
          </div>
        </form>
    </div>

  </main>
</body>
</html>