<?php

// Route::get('contact', function(){
	
//     //  return view('contact::contact');
// });

Route::group(['namespace'=>'Shobha\Contact\Http\Controllers'],function(){
Route::get('contact','ContactController@index');
Route::post('contact','ContactController@send')->name('send.contact');

});