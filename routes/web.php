<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PoolController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\MailController;

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

Route::redirect('/email', 'https://mail.hostinger.com/?clearSession=true&_user=contato@simpiscinas.com');
Route::redirect('/painel', '/dashboard');

Route::post('/mail/budget', [MailController::class, 'budget'])->name('mail.budget');
Route::post('/mail/ombudsman', [MailController::class, 'ombudsman'])->name('mail.ombudsman');
Route::post('/mail/franchise', [MailController::class, 'franchise'])->name('mail.franchise');

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/linha/{line}', [ProductController::class, 'listPools']);
Route::get('/{id}/{title}/detalhes', [ProductController::class, 'showPool']);
Route::get('/orcamento/{pool}', [MainController::class, 'budgetCustom'])->name('budget.custom');
Route::get('/orcamento', [MainController::class, 'budget'])->name('budget');
Route::get('/ouvidoria', [MainController::class, 'ombudsman'])->name('ombudsman');
Route::get('/duvidas', [MainController::class, 'doubts'])->name('doubts');
Route::get('/sobre-nos', [MainController::class, 'about'])->name('about');
Route::get('/seja-um-franqueado', [MainController::class, 'franchise'])->name('franchise');
Route::get('/politica-de-privacidade', [MainController::class, 'privacy'])->name('privacy');
Route::get('/avaliacoes', [MainController::class, 'ratings'])->name('ratings');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('panel.dashboard.welcome');
    })->name('dashboard');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('/dashboard/pools', [PoolController::class, 'list'])->name('pool.list');
    Route::get('/dashboard/pool/create', [PoolController::class, 'create'])->name('pool.create');
    Route::post('/dashboard/pool/create/do', [PoolController::class, 'createDo'])->name('pool.create.do');
    Route::get('/dashboard/pool/edit/{id}', [PoolController::class, 'edit'])->name('pool.edit');
    Route::post('/dashboard/pool/edit/do', [PoolController::class, 'editDo'])->name('pool.edit.do');
    Route::get('/dashboard/pool/delete/{id}', [PoolController::class, 'deleteDo'])->name('pool.delete.do');

    Route::get('/dashboard/carousel', [CarouselController::class, 'list'])->name('carousel.list');
    Route::get('/dashboard/carousel/create', [CarouselController::class, 'create'])->name('carousel.create');
    Route::post('/dashboard/carousel/create/do', [CarouselController::class, 'createDo'])->name('carousel.create.do');
    Route::get('/dashboard/carousel/edit/{id}', [CarouselController::class, 'edit'])->name('carousel.edit');
    Route::post('/dashboard/carousel/edit/do', [CarouselController::class, 'editDo'])->name('carousel.edit.do');
    Route::get('/dashboard/carousel/delete/{id}', [CarouselController::class, 'deleteDo'])->name('carousel.delete.do');
});
