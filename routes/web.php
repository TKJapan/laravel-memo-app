<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

Route::get('/memos', [MemoController::class, 'index']);

Route::get('/memos-view', [MemoController::class, 'view']);

Route::get('/memos/create', [MemoController::class, 'create']); // メモ登録フォーム表示
Route::post('/memos/store', [MemoController::class, 'store']); // メモ登録処理

Route::delete('/memos/{id}', [MemoController::class, 'destroy'])->name('memos.destroy');



