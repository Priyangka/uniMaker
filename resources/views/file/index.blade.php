@extends('layouts.app')

@section('content')
 @if(session()->get('success'))
    <div class="alert alert-success">
     <strong> {{ session()->get('success') }}  </strong>
    </div>'
  @endif

  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding: 0">
            <div class="card">
                <div class="card-header">Dashboard</div>
 <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

@foreach($course as $course)
  <div class="card bg-light">
 <div class="card-body text-center">
 <p class="card-text" >{{$course->course_name}}</p>
<a  class="btn btn-primary" type="submit" href="file.upload/{{$course->id}}">Upload Materials</a>
<a  class="btn btn-primary" type="submit" href="{{route('editcourse',$course->id)}}">Edit Course</a>
<a  class="btn btn-primary" type="submit" href="{{route('deletecourse',$course->id)}}">Delete Course</a>
<a  class="btn btn-primary" type="submit"  href = 'file.view/{{ $course->id }}'>View Material </a>
</div>
</div>
 @endforeach

	<div>

<a href="{{route('createCourse')}}" class="btn btn-primary">Create new Course</a>
</div>
<br>
<div>
  <a  class="btn btn-primary" type="submit"  href = 'team.view'>View Registered Team </a>
</div>
@endsection

