<?php

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
    return view('blog.index');
})->name('index');

Route::get('about-us', function () {
    return view('others.about');
})->name('others.about');

Route::get('post/{id}', function () {
    return view('blog.post');
})->name('blog.post');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::post('create', function () {
        return "Admin create is works";
    })->name('admin.create');

    Route::get('edit/{id}', function () {
        return view('admin.edit');
    })->name('admin.edit');

    Route::get('edit', function () {
        return "Admin Update is work";
    })->name('admin.update');
});
