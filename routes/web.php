<?php

use App\Livewire\Administrador\Create as AdministradorCreate;
use App\Livewire\Auth\Login;
use App\Livewire\Professor\Create as ProfessorCreate;
use App\Livewire\Usuario\Create;
use App\Livewire\Usuario\Edit;
use App\Livewire\Usuario\Index;
use Illuminate\Support\Facades\Route;


// ALUNO
Route::get('/usuario/create' , Create::class);
Route::get('/usuario/edit/{id}', Edit::class)->name('usuario.edit');
Route::get('/usuario/index' , Index::class);
Route::get('/', Login::class)->name('login');













Route::get('/admin', function(){
    return 'login admin';
}) ->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::get('/user', function(){
    return 'login aluno';
}) ->middleware(['auth', 'role:aluno'])->name('aluno.dashboard');

Route::get('/professor', function(){
    return 'login professor';
}) ->middleware(['auth', 'role:professor'])->name('professor.dashboard');

Route::get('/administrador/create', ProfessorCreate::class)->name('admin.dashboard');

Route::get('/professor/create', Create::class);





