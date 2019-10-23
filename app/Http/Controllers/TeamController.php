<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    //

    public function createTeam()
	{
		return view('registerteam');
	}

		public function store(Request $request)
	{
		$request->validate([
            // 'id'=>'required',
        'name'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'uni'=>'required',
        'team_name'=>'required',
        'super_name'=>'required',

		]);

		$team = new Team([
		'name'=>$request->get('name'),
        'phone'=>$request->get('phone'),
        'email'=>$request->get('email'),
        'uni'=>$request->get('uni'),
        'team_name'=>$request->get('team_name'),
        'super_name'=>$request->get('super_name'),
		

		]);

		$team->save();
		return redirect('/')->with('success','Team Registered!');
	}

	public function index()
	{

		$team = Team::all();
		

		
	 
		//avoid duplicate data sql
    
		return view('viewteam', compact('team'));
	}

}
