<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
//cron
//Route::get('/GetInFile', [App\Http\Controllers\CronController::class, 'GetInFile'])->name('GetInFile');
Route::get('/admin/users/fetch_data', [App\Http\Controllers\Admin\UserController::class, 'fetch_data'])->name('fetch_data');
Route::get('/admin/users/get_state', [App\Http\Controllers\Admin\UserController::class, 'get_state'])->name('get_state');
Route::get('/admin/users/get_city', [App\Http\Controllers\Admin\UserController::class, 'get_city'])->name('get_city');
Route::get('/admin/users/get_area', [App\Http\Controllers\Admin\UserController::class, 'get_area'])->name('get_area');


Route::get('/admin/attendance/fetch_data', [App\Http\Controllers\Admin\AttendanceController::class, 'fetch_data'])->name('fetch_data');


Route::prefix('admin')->middleware(['auth', 'admin.auth'])->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    //user
    Route::get('/users/{id}/show', 'App\Http\Controllers\Admin\UserController@show')->name('users.show');
    Route::resource('/users', 'App\Http\Controllers\Admin\UserController')->name('*', 'users');

    //banner
    Route::get   ('/banners/{id}/show', 'App\Http\Controllers\Admin\BannerController@show')->name('banners.show');
    Route::resource('/banners', 'App\Http\Controllers\Admin\BannerController')->name('*', 'banners');    
    Route::get('/admin/banners/fetch_data', [App\Http\Controllers\Admin\BannerController::class, 'fetch_data'])->name('fetch_data');

    //team
    Route::get   ('/teams/{id}/show', 'App\Http\Controllers\Admin\TeamController@show')->name('teams.show');
    Route::resource('/teams', 'App\Http\Controllers\Admin\TeamController')->name('*', 'teams');    
    Route::get('/admin/teams/fetch_data', [App\Http\Controllers\Admin\TeamController::class, 'fetch_data'])->name('fetch_data');

    //testimonial
    Route::get   ('/testimonials/{id}/show', 'App\Http\Controllers\Admin\TestimonialController@show')->name('testimonials.show');
    Route::resource('/testimonials', 'App\Http\Controllers\Admin\TestimonialController')->name('*', 'testimonials');    
    Route::get('/admin/testimonials/fetch_data', [App\Http\Controllers\Admin\TestimonialController::class, 'fetch_data'])->name('fetch_data');

    //faq
    Route::get   ('/faqs/{id}/show', 'App\Http\Controllers\Admin\FaqController@show')->name('faqs.show');
    Route::resource('/faqs', 'App\Http\Controllers\Admin\FaqController')->name('*', 'faqs');    
    Route::get('/admin/faqs/fetch_data', [App\Http\Controllers\Admin\FaqController::class, 'fetch_data'])->name('fetch_data');

    //service
    Route::get   ('/services/{id}/show', 'App\Http\Controllers\Admin\ServiceController@show')->name('services.show');
    Route::resource('/services', 'App\Http\Controllers\Admin\ServiceController')->name('*', 'services');    
    Route::get('/admin/services/fetch_data', [App\Http\Controllers\Admin\ServiceController::class, 'fetch_data'])->name('fetch_data');


    //category
    Route::get('/categories/{id}/show', 'App\Http\Controllers\Admin\CategoryController@show')->name('categories.show');
    Route::post('/categories/categoryupdate', 'App\Http\Controllers\Admin\CategoryController@categoryupdate')->name('categories.categoryupdate');
    Route::resource('/categories', 'App\Http\Controllers\Admin\CategoryController')->name('*', 'categories');    
    Route::get('/admin/categories/fetch_data', [App\Http\Controllers\Admin\CategoryController::class, 'fetch_data'])->name('fetch_data');
    

    //technology
    Route::get   ('/technologies/{id}/show', 'App\Http\Controllers\Admin\TechnologyController@show')->name('technologies.show');
    Route::resource('/technologies', 'App\Http\Controllers\Admin\TechnologyController')->name('*', 'technologies');    
    Route::get('/admin/technologies/fetch_data', [App\Http\Controllers\Admin\TechnologyController::class, 'fetch_data'])->name('fetch_data');
    
    //page
    Route::get   ('/pages/{id}/show', 'App\Http\Controllers\Admin\PageController@show')->name('pages.show');
    Route::resource('/pages', 'App\Http\Controllers\Admin\PageController')->name('*', 'pages');    
    Route::get('/admin/pages/fetch_data', [App\Http\Controllers\Admin\PageController::class, 'fetch_data'])->name('fetch_data');

    //whyChoose
    Route::get   ('/whyChooses/{id}/show', 'App\Http\Controllers\Admin\WhyChooseController@show')->name('whyChooses.show');
    Route::resource('/whyChooses', 'App\Http\Controllers\Admin\WhyChooseController')->name('*', 'whyChooses');    
    Route::get('/admin/whyChooses/fetch_data', [App\Http\Controllers\Admin\PageWhyChooseController::class, 'fetch_data'])->name('fetch_data');

    //project
    Route::get('/project/{id}/show', 'App\Http\Controllers\Admin\ProjectController@show')->name('project.show');
    Route::resource('/project', 'App\Http\Controllers\Admin\ProjectController')->name('*', 'project');    
    Route::get('/admin/project/fetch_data', [App\Http\Controllers\Admin\ProjectController::class, 'fetch_data'])->name('fetch_data');
   
   
    //contect us
    Route::get('/contect-us/{id}/show', 'App\Http\Controllers\Admin\ContactusController@show')->name('contect-us.show');
    Route::resource('/contect-us', 'App\Http\Controllers\Admin\ContactusController')->name('*', 'contect-us');    
    Route::get('/admin/contect-us/fetch_data', [App\Http\Controllers\Admin\ContactusController::class, 'fetch_data'])->name('fetch_data');
   
   
    //industry
    Route::get('/industry/{id}/show', 'App\Http\Controllers\Admin\industryController@show')->name('industry.show');
    Route::resource('/industry', 'App\Http\Controllers\Admin\industryController')->name('*', 'industry');    
    Route::get('/admin/industry/fetch_data', [App\Http\Controllers\Admin\industryController::class, 'fetch_data'])->name('fetch_data');
   
   
    Route::get('/attendance/{id}/show', 'App\Http\Controllers\Admin\AttendanceController@show')->name('attendance.show');
    Route::resource('/attendance', 'App\Http\Controllers\Admin\AttendanceController')->name('*', 'attendance');
    Route::post('/attendance/{id}', 'App\Http\Controllers\Admin\AttendanceController@update')->name('attendance.update');
    

    //blogs manage
    // Route::get('/blog/{id}/show', 'App\Http\Controllers\Admin\BlogController@show')->name('blog.show');
    // Route::resource('/blog', 'App\Http\Controllers\Admin\BlogController')->name('*', 'blog');    
    // Route::get('/admin/blog/fetch_data', [App\Http\Controllers\Admin\BlogController::class, 'fetch_data'])->name('fetch_data');
   
   
    //hiring manage
    // Route::get('/hiring/{id}/show', 'App\Http\Controllers\Admin\HiringController@show')->name('hiring.show');
    // Route::resource('/hiring', 'App\Http\Controllers\Admin\HiringController')->name('*', 'hiring');    
    // Route::get('/hiring/blog/fetch_data', [App\Http\Controllers\Admin\HiringController::class, 'fetch_data'])->name('fetch_data');
    // Route::get('/hiring_info', [App\Http\Controllers\Admin\HiringController::class, 'hiring_info'])->name('hiring_info');
 
 

});

/*Route::prefix('yusen')->middleware(['auth', 'yusen.auth'])->group(function () {

    Route::get('/', function () {
        return view('yusen.dashboard');
    })->name('yusen');
    
   
});*/
/* Route::get('/', function () {
        return view('home');
    })->name('home');*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/technologyCategory/{id}', [App\Http\Controllers\HomeController::class,'technologyCategory'])->name('show');
/*Route::controller(HomeController::class)->group(function () {
    Route::get('/technologyCategory/{id}', 'show');
    //Route::post('/orders', 'store');
});*/

//Route::get('/technologyCategory/{id}', 'App\Http\Controllers\HomeController@technologyCategory')->name('HomeController.technologyCategory');
/*Route::get('/demoupload', [App\Http\Controllers\CronController::class, 'demoupload'])->name('demoupload');*/

/*Route::prefix('/')->middleware(['auth','customer.auth'])->group(function () {

});
*/
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

// Route::get('/blogs/{id}', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
// Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

Route::get('/career', [App\Http\Controllers\HomeController::class, 'career'])->name('career');

Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
// Route::get('/services/{id}', [App\Http\Controllers\serviceController::class, 'index'])->name('services');

Route::get('/technologies', [App\Http\Controllers\HomeController::class, 'technologies'])->name('technologies');

Route::get('/hiring/{id}', [App\Http\Controllers\HiringController::class, 'hiring'])->name('hiring');
Route::post('/hiring', [App\Http\Controllers\HiringController::class, 'hiringpost'])->name('hiring');

Route::get('/terms', [App\Http\Controllers\CmsController::class, 'index'])->name('terms');

Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('terms');
Route::get('/industry', [App\Http\Controllers\HomeController::class, 'industry'])->name('industry');

Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [App\Http\Controllers\ContactController::class, 'contactpost'])->name('contact.contactpost');

