<?php

namespace App\Http\Controllers;
use App\Models\poste;
use Illuminate\Http\Request;

class posteController extends Controller
{
     //ajouter
     public function Addposte(Request $request)
     {
       $poste = poste::create($request->all()); 
        return response($poste);
     }
     //afficher liste des postes
     public function Getpostes()
    {
         return poste::all();
    }
   
}
