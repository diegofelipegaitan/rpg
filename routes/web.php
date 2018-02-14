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
});

Route::get('who-to-write-code-in-php', 'ContentController@whoToWriteCode')->name('who-to-write-code-in-php');

Route::get('why-we-need-objects', 'ContentController@whyWeNeedObjects')->name('why-we-need-objects');

Route::get('encapsulation-getters-setters', 'ContentController@encapsulationGettersSetters')->name('encapsulation-getters-setters');

Route::get('inheritance-abstraction', 'ContentController@inheritanceAbstraction')->name('inheritance-abstraction');

Route::get('interaction-between-objects', 'ContentController@interactionBetweenObjects')->name('interaction-between-objects');

Route::get('interfaces-polymorphism', 'ContentController@interfacesPolymorphism')->name('interfaces-polymorphism');

Route::get('autoloading-namespaces', 'ContentController@autoloadingMamespaces')->name('autoloading-namespaces');

Route::get('composer-psr-4', 'ContentController@composerPsr4')->name('composer-psr-4');

Route::get('factory-value-objects', 'ContentController@factoryValueObjects')->name('factory-value-objects');

Route::get('refactor', 'ContentController@refactor')->name('refactor');

Route::get('static-methods-properties', 'ContentController@staticMethodsProperties')->name('static-methods-properties');

Route::get('constructores', 'ContentController@constructores')->name('constructores');

Route::get('facades-interfaces', 'ContentController@facadesInterfaces')->name('facades-interfaces');

Route::get('constants', 'ContentController@constants')->name('constants');
