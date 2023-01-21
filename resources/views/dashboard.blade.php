
@extends('layouts.layout')
@section('title','Dashboard')
@section('content')
<h1>Dashboard</h1>  

<div class="dashboard">
    <div class=" item item1">
       <p>Total Cases</p> 
       <div>
        {{ $cases->count()}}
         </div>
    </div>
    <div class=" item item2">
        Closed Case 
    </div>
    <div class=" item item3">
        <p>Total Suspects</p>
        <div>
            {{$suspects->count()}}
        </div>
    </div>
    <div class=" item item4">Pending Cases</div>

</div>

@endsection
