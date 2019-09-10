<?php

Route::group([
	'middleware' => 'admin', 
	'prefix' => 'warehouse', 
	'namespace' => 'Modules\Warehouse\Http\Controllers'], function()
{
    Route::get('/', 'WarehouseController@index')->name('warehouse.index');
});
