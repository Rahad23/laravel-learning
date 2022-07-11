<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\myController;
use App\Http\Controllers\Mycontroller2;
use Illuminate\Support\Facades\URL;
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
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');

    // Laravel ridirect 
     
    // return redirect('/contact');
})->name('about.us');

/* CSRF Security */
// Route::get('/about', function (Request $request) {

//     // return view('about');

//     $token = $request->session()->token();

//     dd($token);

// })->name('about.us');

// Add session

Route::get('view', function (Request $request) {
    // Retrieve a piece of data from the session...
    // $value = session('key');
 
    // Specifying a default value...
    // $value = session('key', 'default');
 
    // Store a piece of data in the session...
     return session(['devloper' => 'php']);

    // session add another 
    $request->session()->put('devloper', 'Javascript');
});

// Session chack 
Route::get('testing', function(Request $request){
  return $request->session()->all();
 
});


Route::get('/contact', function () {
    return view('contact');
})->name('contact.us');

Route::get('/country', function (){
    return view('country');
})->middleware('country');

// I catch the id and user of all documents for delete and update purposes

// Route::get('/contact/{roll}', function ($roll) {
//     // return view('contact');
//     return "My id $roll";
// });

// Auth::routes();

// Rout controller
// Laravel v:8
Route::get('contact', [myController::class, 'index'])->name('contact.us');

Route::get('about', [myController::class, 'about'])->name('about.us');

// My controller2 route
Route::get('test', [Mycontroller2::class, 'test']);

//__Student Store__//
Route::post('/student/store', [myController::class, 'StudentStore'])->name('student.store');


// Another part
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');