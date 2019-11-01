@extends('layouts.app')

@section('content')
 <legend>View Material</legend>
@foreach($file as $file)
@if ($file->course_id == $id)
<div class="card">
	<div class="row">
	<file src="{{Storage ::url($file->path)}}">
		<div class="card-body">
	<strong class="card-title">{{$file->title}}</strong>
	<p class="card-text">{{$file->created_at->diffForHumans()}}</p>

		<form action="{{ route('deletefile',$file->id)}}" method="post">
    @csrf
    @method('DELETE')
		<button type="submit" class="btn btn-danger">Delete</button>

		<a href="{{route('downloadfile',$file->id)}}" class="btn btn-primary">Download</a>
	  </form>

	  @endif


 
 @endforeach 
</div>
</file>
</div>
</div>
<div>
	<br>
	<a href="{{ route('viewfile')}}" class="btn btn-success">Back</a>
</br>
	 </div>
 
    @endsection