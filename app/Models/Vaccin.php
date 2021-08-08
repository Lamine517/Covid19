<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccin extends Model
{
    use HasFactory;
    public $fillable = ['name', 'centre_id'];

    public function centre()
    {
        return $this->belongsTo('App\Models\Centre');
    }
}
