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




use App\Task;
use Illuminate\Http\Request;
use App\Invoice;
use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\BzContractController;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('bzcontractform', function () {
        return view('bzcontractsform');
    });
    Route::resource('bzcontract', 'BzContractController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});