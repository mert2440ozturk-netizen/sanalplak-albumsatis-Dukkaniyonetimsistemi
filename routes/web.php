<?php

use App\Http\Controllers\AdminAlbumController;
use App\Http\Controllers\AdminArtistController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminGenreController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminSongController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/albums', [AlbumController::class, 'index']);
Route::get('/albums/{id}', [AlbumController::class, 'show']);

Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/{id}', [ArtistController::class, 'show']);

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}/albums', [GenreController::class, 'albums']);

Route::get('/songs', [SongController::class, 'index']);


Route::get('/admin/orders', [OrderController::class, 'index']);
Route::get('/admin/orders/{id}', [AdminOrderController::class, 'show']);

Route::get('/profile/orders', [OrderController::class, 'myOrders']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/artists', [AdminArtistController::class, 'index']);
Route::get('/admin/artists/{id}', [AdminArtistController::class, 'show']);

Route::get('/admin/albums', [AdminAlbumController::class, 'index']);
Route::get('/admin/albums/{id}', [AdminAlbumController::class, 'show']);

Route::get('/admin/songs', [AdminSongController::class, 'index']);
Route::get('/admin/songs/{id}', [AdminSongController::class, 'show']);

Route::get('/admin/genres', [AdminGenreController::class, 'index']);
Route::get('/admin/genres/{id}', [AdminGenreController::class, 'show']);

Route::get('/admin/users', [AdminUserController::class, 'index']);
Route::get('/admin/users/{id}', [AdminUserController::class, 'show']);
