
@extends('layouts.layout')
@section('title','Dashboard')
@section('content')

<h1>Suspects</h1>

<div class="searchBar">
    <input type="text" placeholder="search name..."> <button type="submit">GO</button>
</div>

<div class="suspects">
    <table>
        <tr>
            <th>Suspect ID</th>
            <th>name</th>
            <th>DOB</th>
            <th>Residence</th>
            <th>Statement</th>
            <th>Police station</th>
            <th>Belongings</th>
            <th>Fired Date</th>

        </tr>

        @foreach ($Suspects as $Suspect)
        <tr>
            <td>{{$Suspect['sup_id']}}</td>
            <td>{{$Suspect['name']}}</td>
            <td>{{$Suspect['DOB']}}</td>
            <td>{{$Suspect['statement']}}</td>
            <td>{{$Suspect['police_station']}}</td>
            <td>{{$Suspect['belongings']}}</td>
            <td>{{$Suspect['created_at']}}</td>





            
            <td>Makindye</td>
            <td>#3846</td>
            <td>Jinja Road</td>
            <td>C04</td>
            <td>view more</td>
        </tr>
        @endforeach


        
    </table>
</div>

@endsection