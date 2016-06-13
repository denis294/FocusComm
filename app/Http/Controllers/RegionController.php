<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Pays;
use App\Models\User;
use Session;
use DB;
use Request;
use App\Lib\Message;

class RegionController extends Controller
{
	// Affiche toutes les régions
    public function index()
    {
        return Region::all();
    }
	
	// Affiche les régions propres à un pays
    public function indexPays($pays_id){
        $pays = Pays::find($pays_id);
        if(!isset($pays)){
  			Message::error('pays.missing');
          	return redirect()->back()->withInput();
        }
        $regions = DB::table('regions')->where('pays_id', '=', $pays_id)->get();
        if(empty($regions)){
  			Message::error('pays.noRegion');
          	return redirect()->back()->withInput();
        }
        return $regions;
    }

	// Crée une nouvelle région
    public function create()
    {
        //
    }

	// Enregistre une nouvelle région dans la base de données
    public function store()
    {
       $fields = Request::only('nom', 'pays_id');
       if (!Region::validate($fields)) {
  			Message::error('form.fieldsError');
          	return redirect()->back()->withInput();
       }
       $pays = Pays::find($fields['pays_id']);
       if (!isset($pays)){
  			Message::error('pays.missing');
          	return redirect()->back()->withInput();
       }
       $region = new Region($fields);
       $region->save();
       return $region;
    }

	// Affiche une région spécifique
    public function show($id)
    {
       $region = Region::find($id);
       if (!isset($region)) {
  			Message::error('region.missing');
          	return redirect()->back()->withInput();
       }
       return $region;
    }

	// Edite une région
    public function edit($id)
    {
        //
    }

    // Met à jour une région
    public function update($id)
    {
       $region = Region::find($id);
       if (!isset($region)) {
  			Message::error('region.missing');
          	return redirect()->back()->withInput();
       }
       $fields = Request::all();
       if (!Region::validate($fields)) {
  			Message::error('form.fieldsError');
          	return redirect()->back()->withInput();
       }
       $region->update($fields);
       return $region;
    }

	// Supprime la région
    public function destroy($id)
    {
       $region = Region::find($id);
       if (!isset($actu)) {
  			Message::error('region.missing');
          	return redirect()->back()->withInput();
       }
       $region->delete();
       return $region;
    }
}
