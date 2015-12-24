<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['uses' => 'HomeController@index'])->name('home');
    Route::get('job/{slug}/{id}', ['uses' => 'JobsController@show'])->name('job.show');
});
