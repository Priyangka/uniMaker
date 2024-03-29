@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <legend>Update Team</legend>
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


        <form method="post" action="{{ route('updateteam', $team->id) }}">
        @csrf
    {{ method_field('PATCH') }}
            <div class="form-group">

                <label for="name"> Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $team->name }}" />
            </div>


            <div class="form-group">
                <label for="phone"> Contact Number:</label>
                <input type="text" class="form-control" name="phone" value="{{ $team->phone }}" />
            </div>

            
              <div class="form-group">
                <label for="email"> Email :</label>
                <input type="text" class="form-control" name="email" value="{{ $team->email}}" />
            </div>

              <div class="form-group">
                <label for="uni"> University:</label>
                <input type="text" class="form-control" name="uni" value="{{ $team->uni }}" />
            </div>

              <div class="form-group">
                <label for="team_name"> Team Name:</label>
                <input type="text" class="form-control" name="team_name" value="{{ $team->team_name }}" />
            </div>

              <div class="form-group">
                <label for="uni"> Supervisor Name:</label>
                <input type="text" class="form-control" name="super_name" value="{{ $team->super_name }}" />
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
          
        </form>  <a href="{{ route('viewfile')}}" class="btn btn-success">Back</a>
    </div>
</div>
@endsection