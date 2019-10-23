@extends('layouts.app')

@section('content')

    <h1>Your Course</h1>   
 
<table class="table table-hover table-dark"  >
	<thead>
<tr>
<td>Name</td>
<td>Course</td>
<td>Enrollment Status</td>
</tr>

</thead>

@foreach($data as $data)
<tr>

</tr>

@endforeach
</table>

@endsection