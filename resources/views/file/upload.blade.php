@extends('layouts.app')

@section('content')

<form  method="post" href="{{ route('viewfile')}}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<input type="file" name="file">
	</div>
	<button type="submit" class="btn btn-primary">Upload </button>
	<a href="{{ route('viewfile')}}" class="btn btn-success">Back</a>
</form>

@endsection