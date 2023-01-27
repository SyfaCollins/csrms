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

      <form action="{{route('register')}}" method="POST">
        <h1>Register Here</h1>
        @csrf
        <input type="text" name="name" placeholder="enter name" value={{old('name')}}><br>
        <div>
            @error('name')
                {{$message}}
            @enderror
        </div>
        
        <input type="text" name="username" placeholder="enter username" value={{old('username')}}><br>
        <div>
            @error('username')
                {{$message}}
            @enderror
        </div>
        
        <input type="email" name="email" placeholder="enter email" value={{old('email')}}><br>
        <div>
            @error('email')
                {{$message}}
            @enderror
        </div>
        
        <input type="password" name="password" placeholder="enter password"><br>
        <div>
            @error('password')
                {{$message}}
            @enderror
        </div>
        
        <input type="password" name="password_confirmation" placeholder="Confirm password"><br>
        <div>
            @error('password_confirmation')
                {{$message}}
            @enderror
        </div>
        
<input type="submit" value="submit">


    </form>
    </div>

  </main>
</body>
</html>