<?php



Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new');
Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create'); 

Route::get('/calendar/display', 'App\Http\Controllers\calendarController@display');

Route::get('/calendar/json','App\Http\Controllers\CalendarController@json')->name('calendar.json');
?>