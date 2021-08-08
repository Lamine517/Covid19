<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Region , Departement };

class DepartementController extends Controller
{
    public function index($slug = null)
{
    $query = $slug ? Region::whereSlug($slug)->firstOrFail()->films() : Departement::query();
    $departements = $query->withTrashed()->oldest('name')->paginate(5);
    $regions = Region::all();
    return view('region.index', compact('departements', 'regions', 'slug'));
}
}
