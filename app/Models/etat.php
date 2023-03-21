<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etat extends Model
{
    public $timestamps= false;
    use HasFactory;
    protected $fillable =['nameetat'];
    public function conge()
    {
        return $this->hasOne('App\Models\conge', 'etat_id');
    }
}
