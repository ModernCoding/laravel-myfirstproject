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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

// Route::get('/', function () {
//   $tasks = [
//     'Go to the store',
//     'Go to the market',
//     'Go to school'
//   ];
//
//   // return view('welcome', [
//   //   'tasks' => $tasks
//   // ]);
//
//   // return view('welcome')
//     // -> withTasks($tasks)
//     // -> withFoo('foobar')
//     // ;
//
//   return view('welcome')
//     ->  with(
//           [
//             'tasks' => $tasks,
//             'foo' => 'foobar'
//           ]
//         );
// });

// Route::get('/about', function () {
//   return view('about');
// });
//
// Route::get('/contact', function () {
//   return view('contact');
// });
