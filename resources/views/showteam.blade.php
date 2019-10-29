@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">View Team Details</h1>

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



        <form >
  
            <div class="form-group">

                <label for="name"> Name:</label>
                <input type="text" readonly="readonly"  class="form-control" name="name" value="{{ $team->name }}" />
            </div>


            <div class="form-group">
                <label for="phone"> Contact Number:</label>
                <input type="text" readonly="readonly" class="form-control" name="phone" value="{{ $team->phone }}" />
            </div>

            
              <div class="form-group">
                <label for="email"> Email :</label>
                <input type="text" readonly="readonly" class="form-control" name="email" value="{{ $team->email}}" />
            </div>

              <div class="form-group">
                <label for="uni"> University:</label>
                <input type="text" readonly="readonly" class="form-control" name="uni" value="{{ $team->uni }}" />
            </div>

              <div class="form-group">
                <label for="team_name"> Team Name:</label>
                <input type="text" readonly="readonly" class="form-control" name="team_name" value="{{ $team->team_name }}" />
            </div>

              <div class="form-group">
                <label for="uni"> Supervisor Name:</label>
                <input type="text" readonly="readonly" class="form-control" name="super_name" value="{{ $team->super_name }}" />
            </div>


            <a href="{{ route('viewteam')}}" class="btn btn-success">Back</a>
        </form>
    </div>
</div>
@endsection