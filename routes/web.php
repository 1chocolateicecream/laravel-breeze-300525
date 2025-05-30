<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::post('posts', [PostController::class, 'store'])->name('post.store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('posts/{post}/update', [PostController::class, 'update'])->name('post.update');
Route::delete('posts/{post}/destroy', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/alg', function () {
    function bubbleSort(array &$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $banana = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $banana;
            }
        }
    }
}

$blackanaconda = [10,50,30,22,69,8];

bubbleSort($blackanaconda);

print_r($blackanaconda);
});

require __DIR__.'/auth.php';
