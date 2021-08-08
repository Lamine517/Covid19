<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Rdv extends Model
{
    use HasFactory;
     // use SoftDeletes;
    protected $fillable = ['prenom','nom','age','sexe','email','telephone','maladie','region','departement','vaccin','motif'];
}
