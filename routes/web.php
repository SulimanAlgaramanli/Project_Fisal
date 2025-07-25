<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('index');
});

Route::get('/projects', function () {

    return view('projects');
});

Route::get('/customer_payments', function () {

    return view('customer_payments');
});

Route::get('/material_invoices', function () {

    return view('material_invoices');
});

Route::get('/technician_invoices', function () {

    return view('technician_invoices');
});

Route::get('/rental_invoices', function () {

    return view('rental_invoices');
});

Route::get('/office_fee_invoices', function () {

    return view('office_fee_invoices');
});

Route::get('/customers', function () {

    return view('customers');
});

Route::get('/employees', function () {

    return view('employees');
});

Route::get('/technicians', function () {

    return view('technicians');
});

Route::get('/stores', function () {

    return view('stores');
});


