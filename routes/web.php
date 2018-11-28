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

Route::get('post/{id}', function ($id) {
    if($id == 1){
        $post = [
            'title' => 'laravel title',
            'contant' => 'this is contant'
        ];
    }else{
        $post = [
            'title' => 'Another laravel title',
            'contant' => 'this is another contant'
        ]; 
    }
    return view('blog.post', ['post' => $post]);
    // return $post['title'];
})->name('blog.post');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::post('create', function (\Illuminate\Http\Request $request, Illuminate\Validation\Factory $validator) {
        $validation = $validator->make($request->all(),[
            'title' => 'required|min:5',
            'contant' => 'required|min:20',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        return redirect()
            ->route('admin.index')
            ->with('info', 'Post Created Title: ' . $request->input('title'));
    })->name('admin.create');

    Route::get('edit/{id}', function ($id) {

        if($id == 1){
            $post = [
                'title' => 'laravel title',
                'contant' => 'this is contant'
            ];
        }else{
            $post = [
                'title' => 'Another laravel title',
                'contant' => 'this is another contant'
            ]; 
        }
        return view('admin.edit', ['post' => $post]);

    })->name('admin.edit');

    Route::post('edit', function (\Illuminate\Http\Request $request, Illuminate\Validation\Factory $validator) {
        $validation = $validator->make($request->all(),[
            'title' => 'required|min:5',
            'contant' => 'required|min:20',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        return redirect()
            ->route('admin.index')
            ->with('info', 'Post Edited new Title: ' . $request->input('title'));
    })->name('admin.update');

});
