<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


Route::post('/contactenquirystore', [HomeController::class, 'ContactEnquiryStore'])->name('contact.enquiry.store');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{slug}', [HomeController::class, 'blog_details'])->name('blog-details');