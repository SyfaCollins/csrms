@extends('layouts.layout')
@section('title','login')
@section('content')

<form action="action_page.php" method="post">
    <h1>
    Login Here
    </h1>
  
    <div class="bg-red">
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

  @endsection