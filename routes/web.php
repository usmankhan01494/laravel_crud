<?php

use App\Http\Controllers\loginController; // ✅ Added loginController import
use App\Http\Controllers\ProductController; // ✅ Capital "P"
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\loginController as AdminloginController; // ✅ Added AdminloginController import
use App\Http\Controllers\admin\dashboardController as AdmindashboardController; // ✅ Added AdmindashboardController import
use App\Http\Controllers\bannerController; // ✅ Added bannerController import
use App\Http\Controllers\testimonialController; // ✅ Added testimonialController import
use App\Http\Controllers\serviceController;  //Added ServiceController import
use App\Http\Controllers\frontend\aboutController as frontendAboutController;
use App\Http\Controllers\frontend\serviceController as frontendServiceController;
use App\Http\Controllers\frontend\blogController as frontendBlogController;
use App\Http\Controllers\frontend\contactController as frontendContantController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\FormController;

use App\Http\Controllers\aboutController; // ✅ Added aboutController import

use App\Http\Controllers\CategoryController; // ✅ Added CategoryController import
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});




Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [LoginController::class, 'index'])->name('user.login');
        Route::get('register', [LoginController::class, 'register'])->name('user.register');
        Route::post('process-register', [LoginController::class, 'processRegister'])->name('user.processRegister');
        Route::post('login', [LoginController::class, 'authenticate'])->name('user.authenticate');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('user.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    });

});


Route::group(['prefix' => 'admin'], function () {
    
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminloginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminloginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('dashboard', [AdmindashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminloginController::class, 'logout'])->name('admin.logout');
    });
    
});


//Categories Routes

Route::resource('categories', CategoryController::class);

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');



// Banner Routes
Route::resource('banners', bannerController::class);


// About Routes

//Route::resource('abouts', aboutController::class);
Route::get('admin/about', [AboutController::class, 'index'])->name('admin.about.index');
Route::post('admin/about', [AboutController::class, 'store'])->name('admin.about.store');
Route::get('admin/about/create', [AboutController::class, 'create'])->name('admin.about.create');
Route::get('admin/about/{id}/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
Route::put('admin/about/{id}', [AboutController::class, 'update'])->name('admin.about.update');
Route::delete('admin/about/{id}', [AboutController::class, 'destroy'])->name('admin.about.destroy');



//Testimonial Routes
//Route::resource('testimonials',testimonialController::class);

Route::get('admin/testimonial', [testimonialController::class, 'index'])->name('admin.testimonial.index');
Route::post('admin/testimonial', [testimonialController::class, 'store'])->name('admin.testimonial.store');
Route::get('admin/testimonial/create', [testimonialController::class, 'create'])->name('admin.testimonial.create');
Route::get('admin/testimonial/{id}/edit', [testimonialController::class, 'edit'])->name('admin.testimonial.edit');
Route::put('admin/testimonial/{id}', [testimonialController::class, 'update'])->name('admin.testimonial.update');
Route::delete('admin/testimonial/{id}', [testimonialController::class, 'destroy'])->name('admin.testimonial.destroy');


// Service Routes
Route::get('admin/service/',[serviceController::class, 'index'])->name('admin.service.index');
Route::post('admin/service',[serviceController::class, 'store'])->name('admin.service.store');
Route::get('admin/service/create',[serviceController::class, 'create'])->name('admin.service.create');
Route::get('admin/service/{id}/edit', [serviceController::class, 'edit'])->name('admin.service.edit');
Route::put('admin/service/{id}',[serviceController::class, 'update'])->name('admin.service.update');
Route::delete('admin/service/{id}', [serviceController::class, 'destroy'])->name('admin.service.destroy');

//blog Routes 
Route::get('admin/blog/',[blogController::class, 'index'])->name('admin.blog.index');
Route::post('admin/blog',[blogController::class, 'store'])->name('admin.blog.store');
Route::get('admin/blog/create',[blogController::class, 'create'])->name('admin.blog.create');
Route::get('admin/blog/{id}/edit', [blogController::class, 'edit'])->name('admin.blog.edit');
Route::put('admin/blog/{id}',[blogController::class, 'update'])->name('admin.blog.update');
Route::delete('admin/blog/{id}', [blogController::class, 'destroy'])->name('admin.blog.destroy');



//Frontend Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about',[frontendAboutController::class,'index'])->name('about');
Route::get('service',[frontendServiceController::class, 'index'])->name('service');
Route::get('blog',[frontendBlogController::class,'index'])->name('blog');
Route::get('contect',[frontendContantController::class, 'index'])->name('contect');


//category url 
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.page');



//form data save
Route::post('/', [FormController::class, 'save'])->name('form.save');

