<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Pays;
use App\Models\User;
use Session;
use DB;
use Request;

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
            return response('Pays not found', 404);
        }
        $regions = DB::table('regions')->where('pays_id', '=', $pays_id)->get();
        if(empty($regions)){
            return response ('Aucune région pour ce pays');
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
           return response('Fields error', 400);
       }
       $pays = Pays::find($fields['pays_id']);
       if (!isset($pays)){
       	   return response ('Pays non trouvé', 404);
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
           return response('Not found', 404);
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
           return response('Not found', 404);
       }
       $fields = Request::all();
       if (!Region::validate($fields)) {
           return response('Fields error', 400);
       }
       $region->update($fields);
       return $region;
    }

	// Supprime la région
    public function destroy($id)
    {
       $region = Region::find($id);
       if (!isset($actu)) {
           return response('Not found', 404);
       }
       $region->delete();
       return $region;
    }
}
