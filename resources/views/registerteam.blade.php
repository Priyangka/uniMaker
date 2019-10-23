@extends('layouts.app')

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
<form method="post" action="{{route('storeTeam')}}" class="form-horizontal" >
  @csrf
  <fieldset>

    <!-- Form Name -->
    <legend>REGISTER NOW!</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="name">Name</label>  
      <div class="col-md-6">
        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">

      </div>
    </div>
 <!-- Text input-->
 
       <div class="form-group">
      <label class="col-md-6 control-label" for="phone">Phone</label>  
      <div class="col-md-6">
        <input id="phone" name="phone" type="text"  placeholder="Phone Number" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="email">Email</label>  
      <div class="col-md-6">
        <input id="desc" name="email" type="text"  placeholder="Email" class="form-control input-md" required="">

      </div>
    </div>

  <div class="form-group">
      <label class="col-md-6 control-label" for="uni">University</label>  
      <div class="col-md-6">
        <input id="uni" name="uni" type="text"  placeholder="University" class="form-control input-md" required="">

      </div>
    </div>


  <div class="form-group">
      <label class="col-md-6 control-label" for="team_name">Team Name</label>  
      <div class="col-md-6">
        <input id="team_name" name="team_name" type="text"  placeholder="Team Name" class="form-control input-md" required="">

      </div>
    </div>
     
     <div class="form-group">
      <label class="col-md-6 control-label" for="project_name">Project Name</label>  
      <div class="col-md-6">
        <input id="team_name" name="project_name" type="text"  placeholder="Project Name" class="form-control input-md" required="">

      </div>
    </div>
     

     <div class="form-group">
      <label class="col-md-6 control-label" for="super_name">Supervisor Name</label>  
      <div class="col-md-6">
        <input id="super_name" name="super_name" type="text"  placeholder="Supervisor Name" class="form-control input-md" required="">

      </div>
    </div>

    <button type="submit" class="btn btn-success">Register</button>


  </fieldset>
</form>

@endsection
