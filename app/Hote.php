<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hote extends Model
{
    protected $fillable = ['nom_magasin','adresse','tel','responsable'];
}
