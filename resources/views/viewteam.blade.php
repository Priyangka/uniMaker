@extends('layouts.app')

@section('content')

@if(session()->get('success'))
   <div class="alert alert-success">
    <strong> {{ session()->get('success') }}  </strong>
   </div>'
 @endif
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<h2>Registered Team Details</h2>
<a class="btn btn-primary" type="submit" href="{{route('createTeam')}}"  style="float: right; text-align:left; ">Add New Team </a>
<br>
</br>

<table class="table table-striped table-dark">
<thead>
<tr>
<td>ID</td>
<td>Name</td>
<td>Contact Number</td>
<td>Email</td>
<td>University</td>
<td>Team Name</td>
<td>Supervisor Name</td>
<td>Action</td>
</tr>
</thead>

@foreach($team as $team)

<tr>
	  
	<td>{{$i++}}</td>
	<td>{{$team->name}}</td>
	<td>{{$team->phone}}</td>
	<td>{{$team->email}}</td>
	<td>{{$team->uni}}</td>
	<td>{{$team->team_name}}</td>
	<td>{{$team->super_name}}</td>
	<td>
<a class="btn btn-primary" type="submit" href="{{route('showteam',$team->id)}}">View</a>	
<a  class="btn btn-primary" type="submit" href="{{route('editteam',$team->id)}}">Edit </a>
<a class="btn btn-danger" type="submit" href="{{route('deleteteam',$team->id)}}">Delete</a>
</td>
</tr>

@endforeach
</table>

 <a href="{{ route('viewfile')}}" class="btn btn-success">Back</a>

@endsection