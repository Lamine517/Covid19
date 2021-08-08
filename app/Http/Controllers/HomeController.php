<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rdv;
use App\Models\Info;
use App\Models\Contact;
use App\Http\Requests\Info as InfoRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        $listInscrit = Rdv::all();
        return view('admin.index',compact('listInscrit'));
    }

    public function showVaccin()
    {
        $listVac = Info::all();
        return view('admin.showVaccin',compact('listVac'));
    }

    public function viewContact()
    {
        $listContact = Contact::all();
        return view('admin.viewContact',compact('listContact'));
    }


    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'vaccin' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'centre' => 'required',
            'jours' => 'required',
            'heures' => 'required'
        ]);

    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'img/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    }

    Info::create($input);
 
    return redirect()->route('admin.index')
                    ->with('success','Image created successfully.');
    }

    public function show(Info $info)
    {
        return view('admin.show',compact('info'));
    }

    public function edit($id)
    {
        $info = Info::findOrFail($id);
        return view('admin.edit', compact('info'));
    }



public function update(Request $request,  $id)
{
    $validatedData = $request->validate([
            'vaccin' => 'required',
            'description' => 'required',
            'centre' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jours' => 'required',
            'heures' => 'required'
        ]);
        Info::whereId($id)->update($validatedData);
        return redirect('/admins')->with('success', 'Vaccin mise à jour avec succèss');                                 
}



    public function destroy($id)
    {
        $info = Info::findOrFail($id);
        $info->delete();
        return redirect('/admins')->with('success', 'Vaccin supprimer avec
        succèss');
    }

 
    
}
