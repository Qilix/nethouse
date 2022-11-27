<?php

use Illuminate\Support\Facades\Route;
use App\News\Controllers\NewsController;


Route::prefix('news')->name('news.')->group(function(){
    Route::get('/getById/{id}', [NewsController::class, 'getById']);
    Route::get('/getAll', [NewsController::class, 'getAll']);
    Route::get('/getInLastThreeDays', [NewsController::class, 'getInLastThreeDays']);
});
