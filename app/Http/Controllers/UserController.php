<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Region;
use Session;
use Request;
use Redirect;
use App\Lib\Message;
use App\Models\Group;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$user = User::all();
    	$user = json_encode($user, JSON_UNESCAPED_UNICODE);
    	return view('admin/users/index')->with('user', $user);
    }

    public function monCompte(){
        $user_id = Session::get('user_id');
        $user = User::find($user_id);
        return view('admin/compte/index')->with('user',$user)->with('badges',$user->badges)->with('region', $user->region);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $fields = Request::only('pseudo', 'email', 'motDePasse', 'dateNaissance', 'sexe', 'region_id');
        $validate = User::validate($fields);
        if ($validate->fails()) {
          return redirect()->back()->withInput()->withErrors($validate);
        }
        $region = Region::find($fields['region_id']);
        if(!isset($region)){
  			Message::error('region.missing');
          	return redirect()->back()->withInput();
        }
        $user = new User($fields);
        $user->motDePasse = bcrypt($user->motDePasse);
        $group = Group::where('nom', 'user')->first();
        $user->save();
        $group->users()->save($user);
        Message::success('compte.created');
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if (!isset($user)) {
  			Message::error('user.missing');
          	return redirect()->back()->withInput();
        }
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $user = User::find($id);
        if (!isset($user)) {
  			Message::error('user.missing');
          	return redirect()->back()->withInput();
        }
        $fields = Request::all();
        $validate = User::validate($fields);
        if ($validate->fails()) {
          return redirect()->back()->withInput()->withErrors($validate);
        }
        $region = Region::find($fields['region_id']);
        if(!isset($region)){
  			Message::error('region.missing');
          	return redirect()->back()->withInput();
        }
        $fields['motDePasse'] = bcrypt($fields['motDePasse']);
        $user->update($fields);
        return $user;
    }

    public function updateMonCompte(Request $request){
        $fields = Request::all();
        if(!User::validate($fields)){
            return redirect()->back()->withInput();
        }
        $user->update($fields);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (!isset($user)) {
  			Message::error('user.missing');
          	return redirect()->back()->withInput();
        }
        $user->delete();
        return $user;
    }
}
