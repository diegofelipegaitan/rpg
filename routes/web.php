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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('how-to-write-code-in-php', 'ContentController@howToWriteCode')->name('how-to-write-code-in-php');

Route::get('why-we-need-objects', 'ContentController@whyWeNeedObjects')->name('why-we-need-objects');

Route::get('encapsulation-getters-setters', 'ContentController@encapsulationGettersSetters')->name('encapsulation-getters-setters');

Route::get('inheritance-abstraction', 'ContentController@inheritanceAbstraction')->name('inheritance-abstraction');

Route::get('interfaces-polymorphism', 'ContentController@interfacesPolymorphism')->name('interfaces-polymorphism');

Route::get('autoloading-namespaces', 'ContentController@autoloadingMamespaces')->name('autoloading-namespaces');

Route::get('static-methods-properties', 'ContentController@staticMethodsProperties')->name('static-methods-properties');

Route::get('overloading', 'ContentController@overloading')->name('overloading');

Route::get('traits', 'ContentController@traits')->name('traits');
