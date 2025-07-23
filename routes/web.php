<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'Khadija';

    return view('index',[

        'name' => $name

    ]);
});
