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

route::get('tickets/{ticket_id}','TicketController@show');
route::get('/new_ticket','TicketController@create');
route::post('save_tickets','TicketController@store');
route::get('/my_ticket','TicketController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
