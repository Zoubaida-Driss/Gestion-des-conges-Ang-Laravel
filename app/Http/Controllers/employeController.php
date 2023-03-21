<?php

namespace App\Http\Controllers;
use App\Models\employe;
use Illuminate\Http\Request;

class employeController extends Controller
{
    public function Getemployes()
    {
         return employe::all();
    }
}
