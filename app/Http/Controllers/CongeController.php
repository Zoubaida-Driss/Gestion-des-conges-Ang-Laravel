<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conge;
use App\Models\etat;
use Illuminate\Support\Facades\DB;
class CongeController extends Controller
{

    //ajouter
    public function Addconge(Request $request)
    {
      $conge = conge::create($request->all()+ ['etat_id' => 2,'reponse_id'=>1]); 
       return response($conge);
    }
    //afficher la liste
    
    public function Getconges()
    {
      // return DB::table('conges')
      //       ->join('etats', 'etats.id', '=', 'conges.etat_id')
      //       ->join('types', 'types.id', '=', 'conges.type_id')
      //       ->join('employes', 'employes.id', '=', 'conges.employe_id')
      //       ->select('etats.nameetat', 'types.nametype', 'employes.nameemp')
      //       ->get();
     // return conge::select('etat_id','type_id','employe_id','reponse_id')
   return conge::join('etats','etats.id', '=', 'conges.etat_id')
   ->join('types', 'types.id', '=', 'conges.type_id')
   ->join('employes', 'employes.id', '=', 'conges.employe_id')
   ->join('reponses', 'reponses.id', '=', 'conges.reponse_id')
     ->get(['conges.*', 'etats.nameetat','types.nametype','employes.nameemp','reponses.namereponse']);
        // return conge::all();
    }
    //afficher un conge specifique 
    public function GetcongeById($id)
    {
      
      // return conge::join('etats','etats.id', '=', 'conges.etat_id')
      // ->join('types', 'types.id', '=', 'conges.type_id')
      // ->join('employes', 'employes.id', '=', 'conges.employe_id')
      // ->join('reponses', 'reponses.id', '=', 'conges.reponse_id')
      // ->where('conges','conges.id','=',$id)
      //   ->get(['conges.*', 'etats.nameetat','types.nametype','employes.nameemp','reponses.namereponse']);
        $conge=conge::find($id);
        if(is_null($conge))
        {
          return ['message'=>'notfound'];
        }
        
        return conge::select('*')->where('conges.id', '=', $id)
        ->join('types', 'types.id', '=', 'conges.type_id')
        ->join('employes', 'employes.id', '=', 'conges.employe_id')
        ->join('reponses', 'reponses.id', '=', 'conges.reponse_id')
        ->get(['conges.*', 'etats.nameetat','types.nametype','employes.nameemp','reponses.namereponse']);
    }
    //mettre à jour le congé
    public function Updateconge(Request $request , $id)
    {
        $conge=conge::find($id);
        if(is_null($conge))
        {
          return ['message'=>'notfound'];
        }
          $conge->update($request->all());
          return  $conge ; 
    }
    
    //supprimer un congé
    public function Deleteconge($id)
    {
        $conge=conge::find($id);
        if(is_null($conge))
        {
          return ['message'=>'notfound'];
        }
       $conge->delete();
       return  ['message'=>'done'];
    }
   public function Getcongespasrep()
    {

        return conge::where('conges.reponse_id', '=', 1)
        ->join('types', 'types.id', '=', 'conges.type_id')
        ->join('etats', 'etats.id', '=', 'conges.etat_id')
        ->join('employes', 'employes.id', '=', 'conges.employe_id')
        ->join('reponses', 'reponses.id', '=', 'conges.reponse_id')
        ->get(['conges.*', 'etats.nameetat','types.nametype','employes.nameemp','reponses.namereponse']);
        // 
    }
    public function Listcongparemp($id)
    {

        return conge::select('*')
        ->where('conges.employe_id', '=', $id)
        ->join('types', 'types.id', '=', 'conges.type_id')
        ->join('employes', 'employes.id', '=', 'conges.employe_id')
        ->join('reponses', 'reponses.id', '=', 'conges.reponse_id')
        ->get(['conges.*', 'etats.nameetat','types.nametype','employes.nameemp','reponses.namereponse']);
        // 
    }
  }
   