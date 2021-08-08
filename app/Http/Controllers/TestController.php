<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\{Region,Departement,Centre,Vaccin};

class TestController extends Controller
{

    public function edit($id)
    {
        // Récupération des informations pour le formulaire
        // $vaccins= Vaccin::with('centre.departement.region')->find($id);
        $centre = Centre::with('departement.region')->find($id);
        $regions = Region::all();
        $departements= Departement::all();
        $vaccins= Vaccin::all();
 
        // Envoi du formulaire
        return view('edit', compact('centre', 'regions','departements','vaccins'));
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
        // Validation
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);
 
        // Mise à jour de l'auteur
        $centre = Centre::find($id);
        $centre->name = $request->name;
        $centre->departement_id = $request->departement;
        $centre->save();
 
        // Redirection sur le formulaire
        return redirect(route('test.edit', $id))->with('success', 'L\'auteur a bien été mis à jour !');
    }
 
    /**
     * Get region's cities.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function departements($id)
    {
        // Retour des villes pour le pays sélectionné 
        return Departement::whereregionId($id)->get();
    } 
    
    public function index()
    {
        $regions = Region::all();
        return view('rendezVous.create', compact('regions'));
    }
}
