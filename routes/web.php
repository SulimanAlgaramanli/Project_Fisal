<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'Suleiman';

    return view('index',[

        'name' => $name

    ]);
});
