<?php

use App\User;
use Carbon\Carbon;
use App\Mail\ExpiryAlert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\Client\ConreqController;


//block back button after logout
Route::group(['middleware' => 'prevent-back'],function(){
    //...
});

Route::get('/test',function(){
   //code test..
  //$user = User::where('exp_date','=',Carbon::now()->toDateString())->get();
  // $c = 1;
   //$user->update(['status' => $c]);
   $user1 = User::where('exp_date','=',Carbon::now()->toDateString())->update(['status' => 1]);
  // dd($user);

});


Route::get('/w', function () {
    return view('fileUpload');
   });
   
   Route::post('upload',function(){
    request()->file('file')->store('my-file','Wasabi');})->name('upload');

//Auth::routes(['register' => false]);
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('search', 'HomeController@search')->name('search');
Route::get('signin', 'HomeController@signin')->name('signin');

//client_signup
Route::get('signup-client', 'HomeController@signupasclient')->name('signupasclient');
Route::get('signup-client-store', 'HomeController@storeclient')->name('signupclientstore');
Route::get('signup-client-update', 'HomeController@updateclient')->name('signupclientupdate');

//artist_signup
Route::get('signup-artist', 'HomeController@signupasartist')->name('signupasartist');
Route::get('signup-artist-store', 'HomeController@storeartist')->name('signupartiststore');
Route::get('signup-artist-update', 'HomeController@updateartist')->name('signupartistupdate');

Route::get('signupwithno', 'HomeController@signupwithno')->name('signupwithno');

//job search
Route::resource('jobs', 'JobController')->only(['index', 'show']);
Route::get('/jobsearch', 'HomeController@jobindex')->name('home');//check for doubt
Route::get('category/{category}', 'CategoryController@show')->name('categories.show');
Route::get('location/{location}', 'LocationController@show')->name('locations.show');
Route::get('alljob','JobController@job_all')->name('jobs.alljob');
//Route::get('jobsearch','JobController@search')->name('jobs.jobsearch');

//Route::resource('/profile');

//Route::group(['prefix' => 'user', 'as' => 'user.']);

Route::get('/add_wishlist','WishlistController@add_wishlist')->name('add_wishlist');
Route::get('/dashboard-artist','HomeController@dashboard_artist')->name('dashboard_artist');
Route::get('/prof','HomePController@index')->name('prof');
Route::get('/profshow/{id}', 'HomePController@show')->name('profshow');
//Route::resource('/prof','HomePController')->name('prof.prof');
Route::get('profsearch', 'HomePController@search')->name('profsearch');
Route::resource('profiles', 'ProfileController')->only(['index', 'show','upload']);
Route::get('category/{category}', 'CategoryController@showprof')->name('categories.showprof');
Route::get('location/{location}', 'LocationController@showprof')->name('locations.showprof');
Route::get('upload','ProfileController@upload')->name('upload');
Route::get('add-wallet','WalletController@payWithRazorpay')->name('paywithrazorpay');
Route::post('payment', 'WalletController@payment')->name('payment');

//contract
Route::get('/contract/create/{id}','ConreqController@create');
Route::post('/contract/create','ConreqController@store')->name('contract.store');
Route::get('/contract/show','ConreqController@show');



Route::resource('/profile',Artist\ProfileController::class);
//Route::resource('/client',ClientController::class);
//Route::resource('/artist',ArtistController::class);


Route::get('/albums',        'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::get('/albums/{id}',   'AlbumsController@show');
Route::post('/albums/store', 'AlbumsController@store');


Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store',      'PhotosController@store');
Route::get('/photos/{id}',        'PhotosController@show');
Route::delete('/photos/{id}',     'PhotosController@destroy');


//Route::resource('/contractrequest' [App\Http\Controllers\ContractrequestController::class]); 

//Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
//Route::resource('/client', [App\Http\Controllers\ClientController::class]);
//Route::resource('/artist', [App\Http\Controller\ArtistController::class]);



Route::group(['prefix' => 'artist', 'as' => 'artist.', 'namespace' => 'Artist', 'middleware' => ['auth','artist']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    /*
    Route::get('/albums',        'AlbumsController@index');
    Route::get('/albums/create', 'AlbumsController@create');
    Route::get('/albums/{id}',   'AlbumsController@show');
    Route::post('/albums/store', 'AlbumsController@store');

    Route::get('/photos/create/{id}', 'PhotosController@create');
    Route::post('/photos/store',      'PhotosController@store');
    Route::get('/photos/{id}',        'PhotosController@show');
    Route::delete('/photos/{id}',     'PhotosController@destroy');*/

});

Route::group(['prefix' => 'client', 'as' => 'client.', 'namespace' => 'Client', 'middleware' => ['auth','client']], function () {

    Route::get('/', 'HomeController@index')->name('home');

});


Route::group(['prefix' => 'expert', 'as' => 'expert.', 'namespace' => 'Expert', 'middleware' => ['auth','expert']], function () {

   //.. for expert url 

});




Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Locations
    Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationsController');

    // Companies
    Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    Route::resource('companies', 'CompaniesController');

    // Jobs
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobsController');

    Route::resource('rewards','RewardsController');

});