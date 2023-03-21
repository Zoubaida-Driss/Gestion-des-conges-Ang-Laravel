<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reponse extends Model
{
    public $timestamps= false;
    use HasFactory;
    protected $fillable =['namereponse'];
    public function conge()
    {
        return $this->hasOne('App\Models\conge', 'reponse_id');
    }
}
