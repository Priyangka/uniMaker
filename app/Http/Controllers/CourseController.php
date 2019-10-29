<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use App\User;
use DB;
use Illuminate\Http\Request;

class CourseController extends Controller {

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function enroll(Request $request, $id) {

		$idUser = \Auth::user()->id;

		$user = User::where('id', $idUser)->first();

		$data = array("student_name" => $user->name, "course_id" => $id, "user_id" => $user->id);
		DB::table('student')->insert($data);

		return redirect('/home')->with('success', 'Enrolled successfully!');

	}

	public function showCourse() {
		$id = \Auth::user()->id;

		$listEnroll = array();
		$listUnenroll = [];
		$var = true;

		$selectedId = [];
		$listCourseId = [];

		$course = Course::all();
		$student = Student::where('user_id', $id)->get();

		foreach ($course as $data) {

			foreach ($student as $stud) {

				if ($data->id == $stud->course_id) {

					$listEnroll[] = $data;
				}
			}

		}

		foreach ($course as $key => $data) {

			array_push($listCourseId, $data['id']);

			foreach ($student as $key => $stud) {

				if ($data['id'] == $stud['course_id']) {

					if (!(in_array($data['id'], $selectedId))) {

						$selectedId[] = $data['id'];

					}

				}

			}

		}

		foreach ($listCourseId as $key => $value) {

			if (!in_array($value, $selectedId)) {

				$listUnenroll[] = $course[$key];

			}

		}

		return view('Course.index', compact('listEnroll', 'listUnenroll'));

	}

	public function showMyCourse() {
		$name = \Auth::user()->name;

		$data = DB::table('student')
		//->join('course', 'course.id', '=', 'student.course_id')
			->where('student.student_name', '=', $name)
			->select('student_name', 'course_id', 'course_status')
			->get();

		return view('Course.mycourse', compact('data'));

	}

	public function showAdminCourse() {
		$course = Course::all();
		$student = Student::all();

		//avoid duplicate data sql

		return view('Course.admin', compact('course', 'student'));

	}

	public function createCourse() {
		return view('Course.create');
	}

	public function store(Request $request) {
		$request->validate([
			// 'id'=>'required',

			'course_name' => 'required',
			'desc' => 'required',
		]);

		$course = new Course([

			'course_name' => $request->get('course_name'),
			'desc' => $request->get('desc'),

		]);

		$course->save();
		return redirect('/file')->with('success', 'Course Saved!');
	}

	public function edit($id) {
		$course = Course::find($id);
		return view('Course/edit', compact('course'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$request->validate([
			'course_name' => 'required',

			'desc' => 'required',
		]);

		$course = Course::find($id);
		$course->course_name = $request->get('course_name');

		$course->desc = $request->get('desc');
		$course->save();

		return redirect('/file')->with('success', 'Course updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$course = Course::find($id);
		$course->delete();

		return redirect('/file')->with('success', 'Course deleted!');
	}

		public function showUsers() {
	    $users = User::all();
        return view('viewuser', compact('users'));
	}

}
