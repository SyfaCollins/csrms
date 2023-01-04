
@extends('layouts.layout')
@section('title','Dashboard')
@section('content')
  <h1 class="text-3xl font-bold underline">
  Case
  </h1>
 <div class="topBar">
<button><a href="/case">Cases</a></button>
<button>Add Case</button>
 </div>

 <div class="form-add">
    <form class="addcase" action="" method="post">
       <label for="Case Number">Case Number</label>
       <input type="text"><br><br>
       <label for="victim">victim</label>
       <input type="text"> <br><br>  <label for="suspect">Suspect</label>
       <input type="text"> <br><br>  <label for="evidence">evidence</label>
       <input type="text"> <br><br><label for="Case category">Case category</label>
       <input type="text"><br><br>   <label for="Date">Date</label>
       <input type="text"> <br><br>  

       <input type="submit">
      </form>
  
 </div>
@endsection
