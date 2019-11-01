@extends('layouts.admin')

@section('content')
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   
</head>


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

<div>

   <h1>Registered User Details</h1>
<br>
</br>

<table class="table">
<thead>
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Role</td>
<td>Action</td>
</tr>
</thead>

@foreach($users as $users)
@if ($users->role!="admin")
<tr>
	<td>{{$i++}}</td>
	<td>{{$users->name}}</td>
	<td>{{$users->email}}</td>
	<td>User</td>
   
	
<td> <a class="btn btn-primary" type="submit" href="{{route('showuser',$users->id)}}">View</a>	
<a  class="btn btn-danger" type="submit" href="{{route('deleteuser',$users->id)}}">Delete </a> </td> 


 @endif
</tr>


@endforeach
</table>

 <a href="{{ route('viewfile')}}" class="btn btn-success">Back</a>

@endsection


@section('js')

@push('scripts')
<script type="text/javascript">

  $(document).ready( function () {
    $('.table').DataTable();
} );

</script>
@endpush