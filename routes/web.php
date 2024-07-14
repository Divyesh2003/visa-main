<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/visa', [App\Http\Controllers\HomeController::class, 'visa'])->name('visa');
Route::get('/blog/category/{slug}', [App\Http\Controllers\HomeController::class, 'blogCategory'])->name('blog_cat');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog.list');
Route::get('blog/{slug}', [App\Http\Controllers\HomeController::class, 'blogList'])->name('blog.single');
Route::get('lang/change', [App\Http\Controllers\HomeController::class, 'change'])->name('changeLang');
Route::get('visa-search', [App\Http\Controllers\HomeController::class, 'search_visa'])->name('search_visa');
Route::get('visa/{slug}', [App\Http\Controllers\HomeController::class, 'visa_country'])->name('search_visa.country');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact.us');
// Route::get('/bussiness/visa', [App\Http\Controllers\HomeController::class, 'bussiness'])->name('bussiness.visa');
Route::get('/work/visa', [App\Http\Controllers\HomeController::class, 'work'])->name('work.visa');
Route::get('/family/visa', [App\Http\Controllers\HomeController::class, 'family'])->name('family.visa');
Route::get('/student/visa', [App\Http\Controllers\HomeController::class, 'student'])->name('student.visa');
Route::get('/visitor/visa', [App\Http\Controllers\HomeController::class, 'visitor'])->name('visitor.visa');
Route::get('/tourist/visa', [App\Http\Controllers\HomeController::class, 'tourist'])->name('tourist.visa');
Route::get('/transit/visa', [App\Http\Controllers\HomeController::class, 'transit'])->name('transit.visa');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/countries', [App\Http\Controllers\CountryController::class, 'countries'])->name('countries');
Route::post('/inquiry', [App\Http\Controllers\HomeController::class, 'inquiry'])->name('inquiry.store');
// other links
Route::get('/visas/requirements', [App\Http\Controllers\HomeController::class, 'visa_requirements'])->name('visa_requirements');
Route::get('/diplomatic/mission', [App\Http\Controllers\HomeController::class, 'diplomatic_mission'])->name('diplomatic_mission');
Route::get('/testimonial', [App\Http\Controllers\HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/feedback', [App\Http\Controllers\HomeController::class, 'feedback'])->name('feedback');
Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/refund', [App\Http\Controllers\HomeController::class, 'refund'])->name('refund');
Route::get('/condition', [App\Http\Controllers\HomeController::class, 'condition'])->name('condition');
Route::get('/bank/details', [App\Http\Controllers\HomeController::class, 'bank_details'])->name('bank_details');
// other services
Route::get('/visa/assistance', [App\Http\Controllers\HomeController::class, 'visa_assistance'])->name('visa_assistance');
Route::get('/air/ticketing', [App\Http\Controllers\HomeController::class, 'air_ticketing'])->name('air_ticketing');
Route::get('/attestation/aposite', [App\Http\Controllers\HomeController::class, 'attestation_aposite'])->name('attestation_aposite');
Route::get('/travel/insurance', [App\Http\Controllers\HomeController::class, 'travel_insurance'])->name('travel_insurance');
Route::get('/document/translation', [App\Http\Controllers\HomeController::class, 'document_translation'])->name('document_translation');
Route::get('/oktoboard', [App\Http\Controllers\HomeController::class, 'oktoboard'])->name('oktoboard');





Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard.dashboard');
        })->name('adminDashboard');
        Route::get('/logout', [App\Http\Controllers\Admin\AdminAuthController::class, 'adminLogout'])->name('adminLogout');
        Route::get('/profile', [App\Http\Controllers\Admin\HomeController::class, 'profile'])->name('admin.profile');
        Route::post('/profile/update', [App\Http\Controllers\Admin\HomeController::class, 'profileUpdate'])->name('admin.profile.update');
        Route::resource('/blog/category', 'App\Http\Controllers\Admin\BlogCategoryController',['names'=>'admin.blog.category']);
        Route::resource('/blog', 'App\Http\Controllers\Admin\BlogController',['names'=>'admin.blog']);
        Route::resource('/country', 'App\Http\Controllers\Admin\CountryController',['names'=>'admin.country']);
        Route::resource('/inquiry', 'App\Http\Controllers\Admin\InquiryController',['names'=>'admin.inquiry']);
        Route::resource('/faq', 'App\Http\Controllers\Admin\FaqController',['names'=>'admin.faq']);
        Route::resource('/visa', 'App\Http\Controllers\Admin\VisaController',['names'=>'admin.visa']);
    });
});

