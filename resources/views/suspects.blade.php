
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
            <th>name</th>
            <th>age</th>
            <th>residence</th>
            <th>Case no.</th>
            <th>police station</th>
            <th>cell no.</th>
        </tr>

        <tr>
            <td>Jerry</td>
            <td>25</td>
            <td>Makindye</td>
            <td>#3846</td>
            <td>Jinja Road</td>
            <td>C04</td>
            <td>view more</td>
        </tr>

        <tr>
            <td>Jerry</td>
            <td>25</td>
            <td>Makindye</td>
            <td>#3846</td>
            <td>Jinja Road</td>
            <td>C04</td>
            <td>view more</td>
        </tr>

        <tr>
            <td>Jerry</td>
            <td>25</td>
            <td>Makindye</td>
            <td>#3846</td>
            <td>Jinja Road</td>
            <td>C04</td>
            <td>view more</td>
        </tr>
    </table>
</div>

@endsection