<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/seoul', function () {
    // Retrieve comments where the 'blog' column matches 'seoul'
    $comments = Comment::where('blog', 'Seoul')->get();

    // Pass the retrieved comments to the 'seoul' view
    return view('seoul', ['comments' => $comments]);
})->name('seoul');
Route::get('/busan', function () {
    // Retrieve comments where the 'blog' column matches 'seoul'
    $comments = Comment::where('blog', 'Busan')->get();

    // Pass the retrieved comments to the 'seoul' view
    return view('busan', ['comments' => $comments]);
})->name('busan');

Route::get('/gyeongju', function () {
    // Retrieve comments where the 'blog' column matches 'seoul'
    $comments = Comment::where('blog', 'Gyeongju')->get();

    // Pass the retrieved comments to the 'seoul' view
    return view('gyeongju', ['comments' => $comments]);
})->name('gyeongju');

Route::get('/dadohaehaesang', function () {
    // Retrieve comments where the 'blog' column matches 'seoul'
    $comments = Comment::where('blog', 'Dadohaehaesang')->get();

    // Pass the retrieved comments to the 'seoul' view
    return view('dadohaehaesang', ['comments' => $comments]);
})->name('dadohaehaesang');

Route::get('/pyeongchang', function () {
    // Retrieve comments where the 'blog' column matches 'seoul'
    $comments = Comment::where('blog', 'Pyeongchang')->get();

    // Pass the retrieved comments to the 'seoul' view
    return view('pyeongchang', ['comments' => $comments]);
})->name('pyeongchang');

// Routes for viewing comments
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/{id}', [CommentController::class, 'show'])->name('comments.show');

// Routes for creating comments
Route::get('/comments/create', function () {return view('add');})->name('comments.create');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// Routes for updating comments
Route::get('/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');

// Routes for deleting comments
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
