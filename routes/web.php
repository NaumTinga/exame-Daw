<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ConsultaController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::prefix('admin')->middleware([Authenticate::class])->group(function () {

//     Route::resource('users', UsuarioController::class);

//     Route::middleware(['role:admin'])->group(function () {
//         Route::resource([
//             'pacientes' => PacienteController::class,
//             'medicos'   => MedicoController::class,
//             'usuarios'  => UsuarioController::class
//         ]);
       
//     });

//     Route::middleware(['role:chefePosto'])->group(function () {
//         Route::resource([
//             'pacientes' => PacienteController::class,
//             'medicos'   => MedicoController::class
//         ]);
//     });

//     Route::middleware(['role:recepcionista'])->group(function () {
//         Route::resource([
//             'pacientes' => PacienteController::class,
//             'medicos'   => MedicoController::class
//         ]);
//     });

// });


Route::prefix('admin')->group(function(){
    Route::resource('pacientes',PacienteController::class);
    Route::resource('medicos',MedicoController::class);
    Route::resource('usuarios',UsuarioController::class);
    Route::resource('consultas',ConsultaController::class);
});

// Route::prefix('chefePosto')->group(function(){
//     Route::resource(['pacientes/index',PacienteController::class]);
//     Route::resource(['pacientes/edit',PacienteController::class]);
//     Route::resource('medicos',MedicoController::class);
// });
