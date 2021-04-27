<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsController;
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

//* ROUTE BASIQUE :

Route::get('/',[AllController::class, 'index'])->name('home');
Route::get('/admin',[AllController::class, 'admin'])->name('admin');

//* PARTIE BACKEND :

//! ROUTE ABOUT !//
Route::get('/admin/about',[AboutsController::class, 'about'])->name('admin.about');
    //? METHODE ROUTE ?//
        //& POUR MODIFIER &//
Route::get('/admin/about/{id}/edit',[AboutsController::class , 'edit'])->name('admin.about.edit');
Route::put('/admin/about/{id}/update',[AboutsController::class , 'update'])->name('admin.about.update');
        //& POUR AJOUTER &//
Route::get('/admin/about/create',[AboutsController::class, 'create'])->name('admin.about.create');
Route::post('/admin/about/post',[AboutsController::class,'store'])->name('admin.about.store');
        //& POUR SUPPRIMER &//
Route::delete('admin/about/{id}/delete',[AboutsController::class, 'destroy'])->name('admin.about.delete');

//! ROUTE PORTFOLIO !//
Route::get('/admin/portfolio',[PortfoliosController::class , 'portfolio'])->name('admin.portfolio');
    //? METHODE ROUTE ?//
        //& POUR MODIFIER &//
Route::get('/admin/portfolio/{id}/edit',[PortfoliosController::class , 'edit'])->name('admin.portfolio.edit');
Route::put('/admin/portfolio/{id}/update',[PortfoliosController::class , 'update'])->name('admin.portfolio.update');
        //& POUR AJOUTER &//
Route::get('/admin/portfolio/create',[PortfoliosController::class, 'create'])->name('admin.portfolio.create');
Route::post('admin/portfolio/post',[PortfoliosController::class,'store'])->name('admin.portfolio.store');
        //& POUR SUPPRIMER &//
Route::delete('/admin/portfolio/{id}/delete',[PortfoliosController::class , 'destroy'])->name('admin.portfolio.delete');
        //& POUR MONTRER &//
Route::get('/admin/portfolio/{id}/show',[PortfoliosController::class, 'show'])->name('admin.portfolio.show');

//! ROUTE FACT !//
Route::get('/admin/fact',[FactsController::class , 'fact'])->name('admin.fact');
    //? METHODE ROUTE ?//
        //& POUR MODIFIER &//
Route::get('/admin/fact/{id}/edit',[FactsController::class , 'edit'])->name('admin.fact.edit');
Route::put('/admin/fact/{id}/update',[FactsController::class , 'update'])->name('admin.fact.update');
        //& POUR AJOUTER &//
Route::get('/admin/fact/create',[FactsController::class,'create'])->name('admin.fact.create');
Route::post('/admin/fact/store',[FactsController::class , 'store'])->name('admin.fact.store');
        //& POUR SUPPRIMER &//
Route::delete('admin/fact/{id}/delete',[FactsController::class, 'destroy'])->name('admin.fact.delete');

//! ROUTE SERVICE !//
Route::get('/admin/service',[ServicesController::class, 'service'])->name('admin.service');
    //? METHODE ROUTE ?//
        //& POUR MODIFIER &//
Route::get('/admin/service/{id}/edit',[ServicesController::class , 'edit'])->name('admin.service.edit');
Route::put('/admin/service/{id}/update',[ServicesController::class, 'update'])->name('admin.service.update');
        //& POUR AJOUTER &//
Route::get('/admin/service/create',[ServicesController::class, 'create'])->name('admin.service.create');
Route::post('/admin/service/store' , [ServicesController::class, 'store'])->name('admin.service.store');
        //& POUR SUPPRIMER &//
Route::delete('/admin/service/{id}/delete',[ServicesController::class,'destroy'])->name('admin.service.delete');

//! ROUTE SKILLS !//
Route::get('/admin/skill', [SkillsController::class , 'skill'])->name('admin.skill');
    //? METHODE ROUTE ?//
        //& POUR MODIFIER &//
Route::get('/admin/skill/{id}/edit',[SkillsController::class , 'edit'])->name('admin.skill.edit');
Route::put('/admin/skill/{id}/update',[SkillsController::class, 'update'])->name('admin.skill.update');
        //& POUR AJOUTER &//
Route::get('/admin/skill/create',[SkillsController::class, 'create'])->name('admin.skill.create');
Route::post('admin/skill/store',[SkillsController::class, 'store'])->name('admin.skill.store');
        //& POUR SUPPRIMER &//
Route::delete('admin/skill/{id}/delete',[SkillsController::class, 'destroy'])->name('admin.skill.delete');

//! ROUTE CONTACT !//
Route::get('/admin/contact', [ContactController::class,'contact'])->name('admin.contact');
    //? METHODE ROUTE ?//
        //& POUR MODIFIER &//
Route::get('/admin/contact/{id}/edit',[ContactController::class, 'edit'])->name('admin.contact.edit');
Route::put('/admin/contact/{id}/update',[ContactController::class, 'update'])->name('admin.contact.update');
        //& POUR AJOUTER &//
Route::get('/admin/contact/create',[ContactController::class,'create'])->name('admin.contact.create');
Route::post('/admin/contact/store',[ContactController::class,'store'])->name('admin.contact.store');
        //& POUR SUPPRIMER &//
Route::delete('admin/contact/{id}/delete',[ContactController::class, 'destroy'])->name('admin.contact.delete');
