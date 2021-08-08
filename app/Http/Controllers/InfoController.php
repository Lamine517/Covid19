<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Rdv;

class InfoController extends Controller
{
    public function index(){
        $infos = Info::latest()->paginate(5);
        $infos = Info::all();
        return view('informations.index',compact('infos'));
    }
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vaccin' => 'required',
            'description' => 'required',
            'centre' => 'required',
            'jours' => 'required',
            'heures' => 'required',
            
        ]);

    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'img/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    }

    Info::create($input);
 
    return redirect()->route('informations.index')
                    ->with('success','Image created successfully.');
}

public function show(Info $info)
{
    return view('admin.show',compact('infos'));
}

public function edit(Info $info)
{
    return view('admin.edit',compact('infos'));
}


public function update(Request $request, Info $info)
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
    }else{
        unset($input['image']);
    }
      
    $info->update($input);

    return redirect()->route('admin.index')
                    ->with('success','info updated successfully');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\info  $info
 * @return \Illuminate\Http\Response
 */
// public function softdelete(Info $info,Request $request )
// {
//     $info->delete();
 
//     return redirect()->route('admin/')
//                     ->with('success','info deleted successfully');
// }

}
