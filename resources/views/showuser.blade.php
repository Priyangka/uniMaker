@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <legend>View User Details</legend>

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
                <input type="text" readonly="readonly"  class="form-control" name="name" value="{{ $users->name }}" />
            </div>


            <div class="form-group">
                <label for="email"> Email:</label>
                <input type="text" readonly="readonly" class="form-control" name="email" value="{{ $users->email }}" />
            </div>

            
              <div class="form-group">
                <label for="role"> Role :</label>
                <input type="text" readonly="readonly" class="form-control" name="role" value="User" />
            </div>

            <a href="{{ route('viewuser')}}" class="btn btn-success">Back</a>
        </form>
    </div>
</div>
@endsection