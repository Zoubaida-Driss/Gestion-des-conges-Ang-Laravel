<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get employes
Route::get('employes','App\Http\Controllers\employeController@Getemployes');
//add conge
Route::post('addconge','App\Http\Controllers\CongeController@Addconge');
//delete person
Route::delete('deleteconge/{id}','App\Http\Controllers\CongeController@DeleteConge');
//get  spsific person
Route::get('conge/{id}','App\Http\Controllers\CongeController@GetCongeById');
//get conges
Route::get('conges','App\Http\Controllers\CongeController@Getconges');
//get conges par emp
Route::get('congesparemp/{id}','App\Http\Controllers\CongeController@Listcongparemp');
//get conges pas de reponse
Route::get('congespasrep','App\Http\Controllers\CongeController@Getcongespasrep');
//add etat
Route::post('addetat','App\Http\Controllers\etatController@Addetat');
//get etats
Route::get('etats','App\Http\Controllers\etatController@Getetats');
//add etat
Route::post('addtype','App\Http\Controllers\typeController@Addtype');
//get etats
Route::get('types','App\Http\Controllers\typeController@Gettypes');
//add poste
Route::post('addposte','App\Http\Controllers\posteController@Addposte');
//get postes
Route::get('postes','App\Http\Controllers\posteController@Getpostes');
//add reponse
Route::post('addreponse','App\Http\Controllers\reponseController@Addreponse');
//get reponses
Route::get('reponses','App\Http\Controllers\reponseController@Getreponses');
//Updatereponse
Route::get('updatereponse/{idcon}/{idrep}','App\Http\Controllers\reponseController@Updatereponse');

//Updatereponse
/**add person
Route::post('addconge','App\Http\Controllers\CongeController@AddConge');

//get persons
Route::get('conges','App\Http\Controllers\CongeController@GetConges');

//get  spsific person
Route::get('conge/{id}','App\Http\Controllers\CongeController@GetCongeById');

//upadate person
Route::put('updateconge/{id}','App\Http\Controllers\CongeController@UpdateConge');

//delete person
Route::delete('deleteconge/{id}','App\Http\Controllers\CongeController@DeleteConge');
 */