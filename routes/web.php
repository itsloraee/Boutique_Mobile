<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BoutiqueController@index')->name('boutique');
return view();
