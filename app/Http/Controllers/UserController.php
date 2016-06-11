<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Region;
use Session;
use Request;
use Redirect;
use App\Lib\Message;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    public function monCompte(){
        $user_id = Session::get('user_id');
        $user = User::find($user_id);
        return view('user/index')->with('user',$user)->with('badges',$user->badges)->with('region', $user->region);
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
        $fields = Request::only('pseudo', 'email', 'motDePasse', 'age', 'sexe', 'region_id');
        if (!User::validate($fields)) {
            return response('Fields error', 400);
        }
        $region = Region::find($fields['region_id']);
        if(!isset($region)){
            return response('Region not found', 404);
        }
        $user = new User($fields);
        $user->motDePasse = bcrypt($user->motDePasse);
        $user->save();
        return $user;
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
           return response('Not found', 404);
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
           return response('Not found', 404);
        }
        $fields = Request::all();
        if (!User::validate($fields)) {
           return response('Fields error', 400);
        }
        $region = Region::find($fields['region_id']);
        if(!isset($region)){
            return response('Region not found', 404);
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
           return response('Not found', 404);
        }
        $user->delete();
        return $user;
    }
}
