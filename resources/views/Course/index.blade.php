@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif




@foreach ($course as $course)
  <div class="card bg-light">
 <div class="card-body text-center">
 <p class="card-text">{{$course->id}} </p>
 <p class="card-text">{{$course->course_name}} </p>
  <p class="card-text">{{$course->desc}} </p>
  <!-- <a  class="btn btn-primary" type="submit"  href = 'course.enroll/{{ $course->id }}'>Enroll </a> -->
  <a  class="btn btn-primary" type="submit">Enroll </a>
<a  class="btn btn-primary" type="submit"  href = 'file.viewuser/{{ $course->id }}'>View Material </a>
</div>
</div>
 @endforeach


<h5>Course that you are enrolled in: </h5>
@foreach ($student as $s)
 @if($s->course_id==1)
<h5>Ideation Concept </h5>
 @elseif($s->course_id==2)
<h5>Prototype </h5>
 @elseif($s->course_id==3)
<h5>Pitch Your Invention </h5>
@endif
 @endforeach







@endsection