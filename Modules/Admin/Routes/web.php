<?php

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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
    /**
     * All Master Routes Are Here
     */
    Route::get('master', 'AdminController@master')->name('master');
    Route::resource('master_job_type', 'Master\JobTypeController');
    Route::post('master_job_type_update','Master\JobTypeController@master_job_type_update')->name('master_job_type_update');
    Route::resource('master_post_position', 'Master\PostPositionController');
    Route::post('master_post_position_update', 'Master\PostPositionController@master_post_position_update')->name('master_post_position_update');
    Route::resource('master_industry', 'Master\IndustryController');
    Route::post('master_industry_update', 'Master\IndustryController@master_industry_update')->name('master_industry_update');
    Route::resource('master_tag_keyword', 'Master\TagController');
    Route::post('master_tag_keyword_update', 'Master\TagController@master_tag_keyword_update')->name('master_tag_keyword_update');
    Route::get('get_job_type','Master\AjaxController@get_job_type_details')->name('get_job_type');

    /**
     * All Job Manager Routes Are Here
     */
    Route::get('job_manager', 'AdminController@job_manager')->name('job_manager');
    Route::get('add_job', 'AdminController@add_job')->name('add_job');
    Route::resource('job', 'Job\Jobcontroller');

    Route::get('settings', 'AdminController@settings')->name('settings');

});
