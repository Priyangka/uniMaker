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
		return redirect('team.create')->with('success','Team Registered!');
	}

	public function index()
	{

		$team = Team::all();
	
    
		return view('viewteam', compact('team'));
	}

public function show($id)
    {
        $team = Team::find($id);
        return view('showteam', compact('team')); 
    }

 public function edit($id)
    {
        $team = Team::find($id);
        return view('editteam', compact('team')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

        'name' =>'required',
        'phone' =>'required',
        'email' =>'required',
        'uni' =>'required',
        'team_name' =>'required',
        'super_name'=>'required'
      
        ]);

        $team = Team::find($id);
        $team->name =  $request->get('name');
     	$team->phone =  $request->get('phone');
      	$team->email =  $request->get('email');
       	$team->uni =   $request->get('uni'); 
        $team->team_name =  $request->get('team_name');
        $team->super_name =  $request->get('super_name');
        $team->save();

        return redirect('team.view')->with('success', 'Changes is updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $team = Team::find($id);
        $team->delete();

        return redirect('team.view')->with('success', 'Selected team details was deleted!');
    }

}
