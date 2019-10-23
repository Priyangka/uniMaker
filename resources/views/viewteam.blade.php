@extends('layouts.app')

@section('content')

<h2>Team </h2>

<table class="table table-striped table-dark">
<thead>
<tr>
<td>ID</td>
<td>Name</td>
<td>Phone</td>
<td>Email</td>
<td>University</td>
<td>Team Name</td>
<td>Supervisor Name</td>
</tr>
</thead>

@foreach($team as $team)

<tr>
	<td>{{$team->id}}</td>
	<td>{{$team->name}}</td>
	<td>{{$team->phone}}</td>
	<td>{{$team->email}}</td>
	<td>{{$team->uni}}</td>
	<td>{{$team->team_name}}</td>
	<td>{{$team->super_name}}</td>
</tr>

@endforeach
</table>

 <a href="{{ route('viewfile')}}" class="btn btn-success">Back</a>

@endsection