<?php

    use App\Http\Controllers\ContactUsController;
    use App\Http\Controllers\DashBoard\DashboardIndexController;
    use App\Http\Controllers\HomePageIndexController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', HomePageIndexController::class)->name('home');
    Route::get('/contact-us', ContactUsController::class)->name('contact-us');
    Route::get('/dashboard', DashboardIndexController::class)->name('dashboard.index');
