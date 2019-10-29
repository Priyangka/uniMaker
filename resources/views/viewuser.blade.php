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

<h2>Registered User Details</h2>
<br>
</br>

<table class="table table-striped table-dark">
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
	<td>{{$users->id}}</td>
	<td>{{$users->name}}</td>
	<td>{{$users->email}}</td>
	<td>User</td>
    @endif
	
</td>
</tr>

@endforeach
</table>

 <a href="{{ route('viewfile')}}" class="btn btn-success">Back</a>

@endsection