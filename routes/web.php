<?php

// Front end routes

Route::get('/', ['uses' => 'Web\BlogController@index', 'as' => 'blog.index'] );
Route::get('/article/{slug}', ['uses' => 'Web\BlogController@detail', 'as' => 'blog.detail'] );

Route::get('/about', function() { return redirect('/about/netrunner'); });
Route::get('/about/netrunner', function () { return view('pages/about/netrunner'); });
Route::get('/about/nisei', function () { return view('pages/about/nisei'); });
Route::get('/about/code-of-conduct', function () { return view('pages/about/code-of-conduct'); });
Route::get('/about/faqs', function () { return view('pages/about/faqs'); });

Route::get('/find-people', function() { return view('pages/op/around-the-world'); });

Route::get('/op', function() { return redirect('/op/available-kits'); });
Route::get('/op/supported-formats', function() { return view('pages/op/formats'); });
Route::get('/op/available-kits', ['uses' => 'Web\OPController@indexForStores', 'as' => 'op.storeIndex'] );
Route::get('/op/kit-policies', function () { return view('pages/op/kit-policies'); });
Route::get('/op/available-kits/{slug}', ['uses' => 'Web\OPController@detailForStores', 'as' => 'op.storeEvent'] );
Route::get('/op/resources', function () { return view('pages/op/resources'); });
Route::get('/op/events/{slug}', ['uses' => 'Web\TournamentSetController@detail', 'as' => 'tournamentset.detail'] );

Route::get('/products', ['uses' => 'Web\ProductController@index', 'as' => 'product.index'] );
Route::get('/products/{slug}', ['uses' => 'Web\ProductController@main', 'as' => 'product.main'] );
// Route::get('/products/{slug}/pdf', ['uses' => 'Web\ProductController@pdf', 'as' => 'product.pdf'] );
Route::get('/products/{slug}/{subpage_slug}', ['uses' => 'Web\ProductController@subpage', 'as' => 'product.subpage'] );

Route::post('paypal', array('as' => 'paypal','uses' => 'Web\PaypalController@postPaymentWithPaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'Web\PaypalController@getPaymentStatus',));

// RSS feed route

Route::feeds();

// Admin routes

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function() { return redirect('/admin/home'); });
    Route::get('/home', 'HomeController@index');

    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);

    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    Route::resource('blogs', 'Admin\BlogsController');
    Route::post('blogs_mass_destroy', ['uses' => 'Admin\BlogsController@massDestroy', 'as' => 'blogs.mass_destroy']);
    Route::post('blogs_restore/{id}', ['uses' => 'Admin\BlogsController@restore', 'as' => 'blogs.restore']);
    Route::delete('blogs_perma_del/{id}', ['uses' => 'Admin\BlogsController@perma_del', 'as' => 'blogs.perma_del']);

    Route::resource('categories', 'Admin\CategoriesController');
    Route::post('categories_mass_destroy', ['uses' => 'Admin\CategoriesController@massDestroy', 'as' => 'categories.mass_destroy']);

    Route::resource('faqs', 'Admin\FAQsController');
    Route::post('faqs_mass_destroy', ['uses' => 'Admin\FAQsController@massDestroy', 'as' => 'faqs.mass_destroy']);

    Route::resource('events', 'Admin\EventsController');
    Route::post('events_mass_destroy', ['uses' => 'Admin\EventsController@massDestroy', 'as' => 'events.mass_destroy']);
    Route::post('events_restore/{id}', ['uses' => 'Admin\EventsController@restore', 'as' => 'events.restore']);
    Route::delete('events_perma_del/{id}', ['uses' => 'Admin\EventsController@perma_del', 'as' => 'events.perma_del']);

    Route::resource('tournamentsets', 'Admin\TournamentSetsController');
    Route::resource('tournaments', 'Admin\TournamentsController');
    Route::resource('products', 'Admin\ProductsController');
    Route::resource('product_subpages', 'Admin\ProductSubpagesController');
});
