<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;
    protected $fillable =['nameemp','lastnameemp','datenaissanceemp','nbjouracquis','emailemp','poste_id'];
    public function poste()
    {
         return $this->belongsTo('App\poste');
    }
    public function conges()
    {
        return $this->hasMany('App\Models\conge', 'employe_id');
    }
}
