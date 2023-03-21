<?php

namespace App\Http\Controllers;
use App\Models\etat;
use Illuminate\Http\Request;

class etatController extends Controller
{
    
     //ajouter
     public function Addetat(Request $request)
     {
       $etat = etat::create($request->all()); 
        return response($etat);
     }
     //afficher liste des etats
     public function Getetats()
    {
         return etat::all();
    }
}
