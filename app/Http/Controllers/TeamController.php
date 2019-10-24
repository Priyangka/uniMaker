<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller {
	//

	public function createTeam() {
		return view('registerteam');
	}

	public function store(Request $request) {
		$request->validate([
			// 'id'=>'required',
			'name' => 'required',
			'phone' => 'required',
			'email' => 'required',
			'uni' => 'required',
			'team_name' => 'required',
			'super_name' => 'required',

		]);

		$team = new Team([
			'name' => $request->get('name'),
			'phone' => $request->get('phone'),
			'email' => $request->get('email'),
			'uni' => $request->get('uni'),
			'team_name' => $request->get('team_name'),
			'super_name' => $request->get('super_name'),
		]);

		$team->save();
		return redirect('team.create')->with('success', 'Team Successfull Register');
	}

	public function index() {

		$team = Team::all();

		//avoid duplicate data sql

		return view('viewteam', compact('team'));
	}

}
