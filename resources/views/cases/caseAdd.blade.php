
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
    <form class="addcase" action="{{route('cases.store')}}" method="post">
      @csrf
       <label for="Case Number">Case Number</label>
       <input type="text" name='cas_refNo'><br><br>
       <label for="victim" >victim</label>
       <input type="text" name='victim'> <br><br>
       <label for="suspect">Suspect</label>
       <input type="text" name="suspect"> <br><br> 
       <label for="evidence">evidence</label>
       <input type="text" name="evidence"> <br><br>
       <label for="statement">Statement</label>
       <input type="text" name="statement"><br><br>  
       <label for="location">location</label>
       <input type="text" name="location"> <br><br>   
       <label for="Date">Date</label>
       <input type="text" name="date"> <br><br>  

       <input type="submit">
      </form>
  
 </div>
@endsection
