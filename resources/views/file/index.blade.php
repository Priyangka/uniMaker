@extends('layouts.admin')


@section('content')
 @if(session()->get('success'))
    <div class="alert alert-success">
     <strong> {{ session()->get('success') }}  </strong>
    </div>'
  @endif

  <h1>Manage Courses</h1>
  

 <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
<a href="{{route('createCourse')}}" class="btn btn-primary" style="float: right;">Create new Course</a>
<br>
</br>
@foreach($course as $course)

  <div class="card bg-light">
 <div class="card-body text-center">
 <p class="card-text" >{{$course->course_name}}</p>
<a  class="btn btn-primary" type="submit" href="file.upload/{{$course->id}}">Upload Materials</a>
<a  class="btn btn-primary" type="submit" href="{{route('editcourse',$course->id)}}">Edit Course</a>
<a  class="btn btn-primary" type="submit"  href = 'file.view/{{ $course->id }}'>View Material </a>
<a  class="btn btn-danger" type="submit" href="{{route('deletecourse',$course->id)}}">Delete Course</a>
</div>
</div>
 @endforeach

	<div>


</div>
<br>

@endsection

