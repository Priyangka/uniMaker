@extends('layouts.admin')

@section('content')

<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>


@if(session()->get('success'))
   <div class="alert alert-success">
    <strong> {{ session()->get('success') }}  </strong>
   </div>
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
<body>

  <h1 >Registered Team Details</h1>
<a class="btn btn-primary" type="submit" href="{{route('createTeam')}}"  style="float: right; text-align:left; ">Add New Team </a>
<br>
</br>

<table class="table" class="table table-striped table-dark">
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


</div>
   
</body>
</html>

@endsection

@section('js')

@push('scripts')
<script type="text/javascript">

	$(document).ready( function () {
    $('.table').DataTable();
} );

</script>
@endpush