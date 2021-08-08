<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public $fillable = ['name'];

    public function departements()
    {
        return $this->hasMany('App\Models\Departement');
    }
 
    public function centres()
    {
        return $this->hasManyThrough('App\Models\Centre', 'App\Models\Departement');
    }

    public function vaccins()
    {
        return $this->hasManyThrough('App\Models\Vaccin', 'App\Models\Centre','App\Models\Departement');
    } 
}
