<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conge extends Model
{
    const CREATED_AT = 'datedemandecong';
    const UPDATED_AT = null;
    use HasFactory;
    protected $fillable =['datedemandecong','datedebutcong','datefincong','comentaire','nbjourcong','etat_id','type_id','employe_id','reponse_id'];
    public function employe()
    {
        return $this->belongsTo('App\employe');
    }
    public function type()
    {
         return $this->belongsTo('App\type');
    }
    public function etat()
    {
         return $this->belongsTo('App\etat');
    }
    public function reponse()
    {
         return $this->belongsTo('App\reponse');
    }
}
