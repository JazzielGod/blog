<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;

Route::get('/example', function () {
    return view('welcome');
});

Route::get('/', HomeController::class);

Route::get('pruebas', function () {
   $phone = Phone::find(1);
   
   return $phone->user;
});

/*Route::get('/posts', [PostController::class, 'index'])
        ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
        ->name('posts.create');  

Route::post('/posts', [PostController::class, 'store'])
        ->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])
        ->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
        ->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])
        ->name('posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])
        ->name('posts.destroy');*/

// Route::resource('articulos', PostController::class)
//         ->parameters(['articulos' => 'post'])
//         ->names('posts');

//Route::apiResource('posts', PostController::class);

Route::resource('posts', PostController::class);

Route::get('prueba',  function () {
    
    //crear nuevo post
    /*$post = new Post;
    $post->title = 'tituLO de PrueBA 4';
    $post->content = 'contenido de prueba 4';
    $post->category = 'categoria de prueba 4';
    $post->save();
    
    return $post;*/

    /*$post = Post::where('title', 'titulo de prueba 1')->first();
    $post->category = 'desarrollo web';
    $post->save();

    return $post;*/

    //listar todos los post
    /*$posts = Post::orderBy('category', 'asc')
                ->select('id', 'title', 'category')
                ->take(2)
                ->get();

    return $posts;*/

    //eliminar post
    // $post = Post::find(1);
    // $post->delete();

    // return "Post eliminado";

    // $post = Post::find(1);

    // dd($post->is_active);
    // return $post->is_active;

});


/*
Route::get('/post/{post}/{category}', function ($post, $category) {
    return "Aqui se mostrara el post $post en la categoria $category";
});

Route::get('/post/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Aqui se mostrara el post $post en la categoria $category";
    } else {
        return "Aqui se mostrara el post $post";
    }
});*/

//get
//post
//put
//patch
//delete
