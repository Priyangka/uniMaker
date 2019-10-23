@extends('layouts.app')

@section('content')
 @if(session()->get('success'))
    <div class="alert alert-success">
     <strong> {{ session()->get('success') }}  </strong>
    </div>'
  @endif



@foreach($course as $course)

  <div class="card bg-light">
 <div class="card-body text-center">
 <p class="card-text" >{{$course->course_name}}</p>


</div>  

@endforeach

 

</div>
</div>
</div>
	 <a href="{{ route('home')}}" class="btn btn-success">Back</a>




@endsection