<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome/welcome');
});

Route::get('/home', function () {
    return view('welcome/welcome');
});

$webControllersPath = 'App\Http\Controllers\Web\\';
Route::prefix('athletes')->group(function() use ($webControllersPath){
    Route::get('/', $webControllersPath.'AthleteController@getAthletes');
    Route::get('/add', $webControllersPath.'AthleteController@addAthlete');
    Route::post('/add-post', $webControllersPath.'AthleteController@addAthletePost');
    Route::get('/{id}/training',$webControllersPath.'TrainingController@viewTraining');
});

Route::prefix('disciplines')->group(function() use($webControllersPath){
    Route::get('/', $webControllersPath.'DisciplineController@getDisciplines');
    Route::get('/add', $webControllersPath.'DisciplineController@addDiscipline');
    Route::post('/add-post', $webControllersPath.'DisciplineController@addDisciplinePost');
});



Route::prefix('exercises')->group(function() use ($webControllersPath){
    Route::get('/', $webControllersPath.'ExerciseController@getExercises');
    Route::get('/add', $webControllersPath.'ExerciseController@addExercise');
    Route::post('/add-post', $webControllersPath.'ExerciseController@addExercisePost');
});
