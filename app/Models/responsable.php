<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responsable extends Model
{
    use HasFactory;
    // $table->string('nameresp');
    
    protected $fillable =['nameresp','lastnameresp','emailresp','poste_id'];
    public function poste()
    {
         return $this->belongsTo('App\poste');
    }
}
