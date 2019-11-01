@extends('layouts.admin')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form method="post" action="{{route('storeCourse')}}" class="form-horizontal" >
  @csrf
  <fieldset>
      </fieldset>
    <!-- Form Name -->
    <legend>Create New Course</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="course_name">Course Name</label>  
      <div class="col-md-6">
        <input id="course_name" name="course_name" type="text" placeholder="Course Name" class="form-control input-md" required="">

      </div>
    </div>
 <!-- Text input-->
 
      

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="course_name">Description</label>  
      <div class="col-md-6">
        <input id="desc" name="desc" type="text"  placeholder="Description" class="form-control input-md" required="">

      </div>
    </div>

     

    <button type="submit" class="btn btn-success">Create Course</button>


  </fieldset>
</form>

@endsection
