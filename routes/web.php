<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/index', [TodosController::class, 'todosPage'])->name('todos.home');

Route::controller(TodosController::class)
    ->prefix('todos')
    ->as('todos.')
    ->group(function () {
        Route::get('done', 'todosPageDone')->name('done');
        Route::get('deleted', 'todosPageDeleted')->name('delete');
        Route::get('category/{category_id}', 'todosPage')->name('category');
    });

Route::controller(TodosController::class)
    ->prefix('todo')
    ->as('todo.')
    ->group(
        function () {
            Route::get('view/{id}', 'todoDetailPage')->name('view');
            Route::get('create', 'createTodo')->name('create');
            Route::get('viewUpdate/{id}', 'viewUpdateTodo')->name('viewUpdate');
            Route::post('store', 'storeTodo')->name('store');
            Route::post('update', 'updateTodo')->name('update');
            Route::post('done_delete', 'doneDeleteTodo')->name('doneDelete');
        }
    );

Route::get('categories/index', [CategoriesController::class, 'categoriesPage'])->name('categories.home');
Route::get('categories/deleted', [CategoriesController::class, 'categoriesPageDeleted'])->name('categories.delete');
Route::controller(CategoriesController::class)
    ->prefix('category')
    ->as('category.')
    ->group(
        function () {
            Route::get('create', 'createCategory')->name('create');
            Route::get('viewUpdate/{id}', 'viewUpdatecategory')->name('viewUpdate');
            Route::post('store', 'storecategory')->name('store');
            Route::post('update', 'updateCategory')->name('update');
            Route::post('delete', 'deletecategory')->name('delete');
        }
    );
