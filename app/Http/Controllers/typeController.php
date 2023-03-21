<?php

namespace App\Http\Controllers;
use App\Models\type;
use Illuminate\Http\Request;

class typeController extends Controller
{
 //ajouter
 public function Addtype(Request $request)
 {
   $type = type::create($request->all()); 
    return response($type);
 }
 //afficher liste des types
 public function Gettypes()
{
     return type::all();
}}
