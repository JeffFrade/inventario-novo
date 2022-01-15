<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(route('login'));
});

\Illuminate\Support\Facades\Auth::routes(['register' => false]);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'charts'], function () {
        Route::group(['prefix' => 'equipments'], function () {
            Route::get('equipments-by-type', 'EquipmentController@equipmentByTypeChart')
                ->name('equipment.type.chart');
            Route::get('equipments-by-room', 'EquipmentController@equipmentByRoomChart')
                ->name('equipment.room.chart');
        });
    });
});

