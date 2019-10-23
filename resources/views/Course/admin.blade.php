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
 
 
 
@foreach($course as $course)
  <div class="card bg-light">
 <div class="card-body text-center">
   <p class="card-text" >{{$course->course_code}}</p>
 <p class="card-text" >{{$course->course_name}}</p>
<a  class="btn btn-primary" type="submit" href="file.upload/{{$course->id}}">Upload Materials</a>

</div>  

  @endforeach



@endsection