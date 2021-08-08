<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Departement extends Model
{
    use HasFactory ;
    
    public $fillable = ['name', 'region_id'];
 
    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    public function centres()
    {
        return $this->hasMany('App\Models\Centre');
    }
}
