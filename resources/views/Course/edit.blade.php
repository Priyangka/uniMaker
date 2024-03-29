@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <legend>Update Course</legend>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif



        <form method="post" action="{{ route('updatecourse', $course->id) }}">
        @csrf
    {{ method_field('PATCH') }}
            <div class="form-group">

                <label for="course_name">Course Name:</label>
                <input type="text" class="form-control" name="course_name" value="{{ $course->course_name }}" />
            </div>


            <div class="form-group">
                <label for="desc">Description:</label>
                <input type="text" class="form-control" name="desc" value="{{ $course->desc }}" />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection


