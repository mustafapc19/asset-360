<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\BzContractController;
use App\Http\Controllers\BzPartController;

/* Route::group(['middleware' => 'auth'], function() {
    Route::auth();
}); */

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */


    Route::get('/home', 'HomeController@index');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('bzcontractform', function () {
        return view('bzcontracts.bzcontractsform');
    });
    Route::resource('bzcontract', 'BzContractController');

    Route::get('bzpartform', function () {
        return view('bzparts.bzpartsform');
    });
    Route::resource('bzpart', 'BzPartController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});
