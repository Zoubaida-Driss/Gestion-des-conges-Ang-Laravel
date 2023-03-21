<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poste extends Model
{
    public $timestamps= false;
    use HasFactory;
    protected $fillable =['nameposte'];
    public function responsable()
    {
        return $this->hasOne('App\Models\responsable', 'poste_id');
    }
    public function employe()
    {
        return $this->hasOne('App\Models\employe', 'poste_id');
    }
   
}
