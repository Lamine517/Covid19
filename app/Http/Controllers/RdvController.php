<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Rdv,Region,Departement,Vaccin,Centre};
use Mail;

class RdvController extends Controller
{
    public function index()
    {
        $rdvs = Rdv::all();
        $regions = Region::all();
        return view('rendezVous.index', compact('rdvs','regions'));
    }

    public function info1()
    {
        
        $rdvs = Rdv::all();
        return view('rendezVous.info1');
    }

    public function info2()
    {
        return view('rendezVous.info2');
    }
    
    public function info3()
    {
        return view('rendezVous.info3');
    }

    public function create()
    {
        // $vaccin = Vaccin::with('centre.departement.region')->find($id);
        // $countries = Country::all();
        $regions = Region::all();
        $departements = Departement::all(); 
        $centres = Centre::all(); 
        // $departements = Departement::where('region_id','=',$regions->id)->get();
        return view('rendezVous.create',compact('regions','departements','centres'));
    }

    public function store(Request $request)
    // store = storeForm
    {
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'age' => 'required',
            'sexe' => 'required',
            'email' => 'required',
            'telephone' => 'required|digits:9|numeric',
            'maladie' => 'required',
            'region' => 'required',
            'departement' => 'required',
            'vaccin' => 'required',
            'motif'=> 'required',
            
        ]);

        $rdv = $request->all();

        Rdv::create($rdv);
        //  Send mail to admin
        \Mail::send('rdvMail', array(
            'prenom' => $rdv['prenom'],
            'nom' => $rdv['nom'],
            'age' => $rdv['age'],
            'sexe' => $rdv['sexe'],
            'email' => $rdv['email'],
            'telephone' => $rdv['telephone'],
            'maladie' => $rdv['maladie'],
            'region' => $rdv['region'],
            'departement' => $rdv['departement'],
            'vaccin' => $rdv['vaccin'],
            'motif' => $rdv['motif'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to($request->get('email'), $request->get('prenom'))->subject($request->get('motif'));
            
        });

        return redirect()->back()->with(['success' => 'Votre demande a été enregistré avec succès']);
        
    }

    public function show(Rdv $rdvs)
    {
        return view('rendezVous.info1',compact('rdvs'));
    }

}
