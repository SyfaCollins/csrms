
@extends('layouts.layout')
@section('title','Dashboard')
@section('content')
  <h1 class="text-3xl font-bold underline">
  Case
  </h1>
 <div class="topBar">
<button>Cases</button>
<button> <a href="{{route('cases.create')}}">Add Case</a> </button>
 </div>

 <div class="listing">
  <table>
    <tr>
      <th>case_Ref No</th>
      <th>Victim</th>
      <th>Suspect</th>
      <th>Evidence</th>
      <th>Statement</th>
      <th>Location</th>
      <th>Date_fired</th>



      
    </tr>
@foreach ($cases as $cas)
  <tr>
    <td>{{$cas['cas_refNo']}}</td>
    <td>{{$cas['victim']}}</td>
    <td>{{$cas['suspect']}}</td>
    <td>{{$cas['evidence']}}</td>
    <td>{{$cas['statement']}}</td>
    <td>{{$cas['location']}}</td>
  </tr>

@endforeach

  </table>
 </div>
@endsection
