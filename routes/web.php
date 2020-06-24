<?php

use Illuminate\Support\Facades\Artisan;
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

Auth::routes();

Route::get('/', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/industry/autocomplete/{searchText?}', 'SearchController@autocomplete')
        ->name('industryAutocomplete');

    Route::resource('ceo', 'CEOController');

    Route::get('/home', 'HomeController@home')->name('home');

    /**
     * Web based interfaces to clear caches. Usually used for development purposes.
     * May help when deploying new version of application
     */

    //Clear route cache:
    Route::get('/clear-route', function () {
        $exitCode = Artisan::call('route:clear');
        return 'Routes cache cleared';
    });

    //Clear config cache:
    Route::get('/config-cache', function () {
        $exitCode = Artisan::call('config:clear');
        return 'Config cache cleared';
    });

    // Clear application cache:
    Route::get('/clear-cache', function () {
        $exitCode = Artisan::call('cache:clear');
        return 'Application cache cleared';
    });

    // Clear view cache:
    Route::get('/view-clear', function () {
        $exitCode = Artisan::call('view:clear');
        return 'View cache cleared';
    });

    // Clear all caches:
    Route::get('/clear-all', function () {
        $exitCode[] = Artisan::call('route:clear');
        $exitCode[] = Artisan::call('config:clear');
        $exitCode[] = Artisan::call('view:clear');
        $exitCode[] = Artisan::call('cache:clear');
        return 'All caches cleared';
    });
});


