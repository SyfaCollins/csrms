
@extends('layouts.layout')
@section('title','Dashboard')
@section('content')

<div class="suspectsShow">
  <h1 class="text-3xl font-bold underline">
    Add Suspect
    </h1>
  
   <div class="form-add">
      <form class="addcase" action="{{route('suspects.store')}}" method="post">
        @csrf
         <label for="Case Number">Supect ID</label>
         <input type="text" name='sup_id'><br><br>
         <label for="name" >name</label>
         <input type="text" name='name'> 
         @error('name')
         <div>Insert name</div><br>
     @enderror<br><br>
         <label for="DOB">DOB</label>
         <input type="text" name="DOB"> 
         @error('DOB')
         <div>{{$message}}</div><br>
     @enderror<br><br> 
         <label for="residence">residence</label>
         <input type="text" name="residence"> <br><br>
         @error('residence')
         <div>{{$message}}</div><br>
     @enderror
         <label for="statement">Statement</label>
         <input type="text" name="statement"><br><br>  
         <label for="police_station">police_station</label>
         <input type="text" name="police_station"> <br><br>
         @error('police_station')
         <div>{{$message}}</div><br>
     @enderror
         <label for="belongings">belongings</label>
         <input type="text" name="belongings"> <br><br>
            
         <label for="created_at">created_at</label>
         <input type="text" name="created_at"> <br><br>  
  
         <input type="submit">
        </form>
    
   </div>
</div>
  
@endsection
