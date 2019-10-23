<?php

namespace App\Http\Controllers;
use App\File;
use App\Course;
use App\Student;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
     public function index()
	{		$course = Course::all();	
		$file=File::orderby('created_at','desc')->paginate(30);
		return view('file.index',compact ('course','file'));
	}
	 public function indexUser()
	{		$course = Course::all();
			$name= \Auth::user()->name ;
       

		$data =DB::table('student')
            ->where('student_name', '=', '$name')
            ->select('course_id','course_status')
            ->get();


		$file=File::orderby('created_at','desc')->paginate(30);
		return view('file.indexUser',compact ('course','file','data'));
	}

    public function store(Request $request ,$id)
	{	$course = Course::find($id);	
		$this->validate( $request,['file'=>'required|file|max:20000']);
		$upload= $request->file('file');
		$path=$upload->store('public/storage');
		$file=File::create([
			'title'=>$upload->getClientOriginalName(),
		    'course_id'=>$id,
		     'path'=>$path
		 ]);
		return redirect('/file')->with('success','File is uploaded');
	}

	 public function create()
	{		
		return view('file.upload');
	}

	public function destroy($id)
	{ 
		$del=File::find($id);
		Storage::delete($del->path);
		$del->delete();
		return redirect('/file')->with('success','File is deleted');

	}

	public function show($id)
	{   
		$dl=File::find($id);
	

		return Storage::download($dl->path,$dl->title);

	}

public function view($id)
    {  $course = Course::find($id);
    	
       
		$file=File::orderby('created_at','desc')->paginate(30);

     return view('file.view',compact ('course','file','id'));
    }

    public function viewUser($id)
    {  $course = Course::find($id);
    	
       
		$file=File::orderby('created_at','desc')->paginate(30);

     return view('file.viewuser',compact ('course','file','id'));
    }
}
