<?php

use Illuminate\Http\Request;

Route::get('/', 'Controller@index');
Route::get('/contact-us', 'Controller@contact');
Route::get('/registration/{type}', 'Controller@registration');
Route::get('/about-us', 'Controller@about');
Route::get('/payment/', 'Controller@payment');
Route::get('/payment/{invoice_id}', 'Controller@payment');
Route::get('/terms-and-conditions', 'Controller@terms');
Route::get('/consulting', 'Controller@consulting');
Route::get('/training', 'Controller@training');
Route::get('/bank-transactions-audit', 'ConsultingController@bankTransactionAudit');
Route::get('/business-process-re-engineering', 'ConsultingController@businessProcess');
Route::get('/litigation-support', 'ConsultingController@litigationSupport');
Route::get('/consulting-team', 'ConsultingController@team');
Route::get('/training-team', 'TrainingController@team');
Route::get('/miscallaneous', 'TrainingController@miscallaneous');
Route::get('/citn', 'TrainingController@citn');
Route::get('/atswa', 'TrainingController@atswa');
Route::get('/ican', 'TrainingController@ican');
Route::get('/acca', 'TrainingController@acca');
Route::get('/info-board', 'TrainingController@infoBoard');
Route::get('/ielts', 'TrainingController@ielts');
Route::get('/toefl', 'TrainingController@toefl');
Route::get('/gmat', 'TrainingController@gmat');
Route::get('/gre', 'TrainingController@gre');
Route::get('/sat', 'TrainingController@sat');
Route::get('/pte', 'TrainingController@pte');
Route::get('/confirmation', 'TrainingController@confirmation');
Route::post('/form/{type}', 'TrainingController@formSubmission');

Auth::routes();


Route::match(['GET', 'POST'],'/pay', 'RaveController@initialize')->name('pay');
Route::match(['GET', 'POST'],'/registration/pay', 'RaveController@initialize')->name('pay');
Route::get('/rave/callback', 'RaveController@callback')->name('callback');
Route::post('/upload/video/{uniqueId}', 'RaveController@uploadVideo')->name('uploadVideo');
