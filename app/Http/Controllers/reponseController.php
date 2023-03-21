<?php

namespace App\Http\Controllers;
use App\Models\reponse;
use App\Models\conge;
use Illuminate\Http\Request;

class reponseController extends Controller
{
 //ajouter
 public function Addreponse(Request $request)
 {
   $reponse = reponse::create($request->all()); 
    return response($reponse);
 }
 //afficher liste des reponses
 public function Getreponses()
{
     return reponse::all();
}
 //ajouter
 public function Updatereponse($idcon,$idrep)
 {
     conge::where('id', $idcon)
      ->update(['reponse_id' => $idrep]);
    
    }
//    $reponse = reponse::create($request->all()); 
//     return response($reponse);
 }
 //afficher liste des reponses por les buttons de décisions
//  public function Getreponsebutt()
// {
//      return reponse::select('*')->where('id','>', 1);
// }

