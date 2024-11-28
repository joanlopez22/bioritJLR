<?php

use App\Http\Controllers\BiorritmesController;

Route::get('/', function () {
    return view('bio.form');
});

Route::post('/calcular', [BiorritmesController::class, 'calcular'])->name('biorritmes.calcular');

Route::get('/report', [BiorritmesController::class, 'report'])->name('biorritmes.report');
