<?php
use App\Http\Controllers\ProjectController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
//webPage.com = Route::get('/', function)
//webPage.com/contacto = Router::get('contacto', function)


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::get('/portafolio', [ProjectController::class,'index'])->name('projects.index');
Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');

Route::get('/portfolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portfolio/{project}/editar', 'ProjectController@update')->name('projects.update');

Route::post('/portafolio', [ProjectController::class,'store'])->name('projects.store');
Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('messages.store');


//Route::get('/', function(){
//   return view('home');
//})->name('home1');

