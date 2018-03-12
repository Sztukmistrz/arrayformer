<?php


Route::get('test', function () {
    return view('welcome1');
});


Route::get('test1', [
	'uses' => 'Sztukmistrz\Arrayformer\Http\Controllers\ArrayformerController@index',
	'as' => 'arrayformer'
]);
