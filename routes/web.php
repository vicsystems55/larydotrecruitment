<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\JobApplicationController;



Route::get('/', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about_us']);

Route::get('/appointments', [PageController::class, 'appointments']);

Route::get('/features', [PageController::class, 'features']);

Route::get('/services', [PageController::class, 'services']);

Route::get('/blog', [PageController::class, 'blog']);

Route::get('/our-team', [PageController::class, 'our_team']);

Route::get('/testimonial', [PageController::class, 'testimonial']);

Route::get('/contact-us', [PageController::class, 'contact_us']);

Route::get('/application', [PageController::class, 'application']);

Route::get('/vacancies', [PageController::class, 'vacancies']);

Route::post('/apply', [JobApplicationController::class, 'apply']);









