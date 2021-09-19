<?php

use Illuminate\Http\Request;

Route::get('/', 'Index');
 Route::get('/test',function(){
//      $url = route('sayuncle.index');
    	
// return redirect($url)->with('alert','Thank you for registering for the upcoming Say Uncle contest; now, check your
// email for further details…');
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/331757115/verify",
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => "",
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 0,
//       CURLOPT_FOLLOWLOCATION => true,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => "GET",
//       CURLOPT_HTTPHEADER => array(
//         "Content-Type: application/json",
//         "Authorization: Bearer ".config('rave.secretKey')
//       ),
//     ));
    
//     $response = curl_exec($curl);
    
//     curl_close($curl);
//     dd( json_decode($response) ) ;
 });

Route::group([
    'prefix' => 'sayuncle',
    'as' => 'sayuncle.',
    'namespace' => 'SayUncle',
], function() {

    Route::get('/', 'SayUncleController@index')->name('index');
    Route::post('/register', 'SayUncleController@register')->name('register'); 
    Route::post('/new-register', 'SayUncleController@new_register')->name('new_register');
    Route::get('/profile/{contestant}', 'SayUncleController@publicProfile' )->name('contestant.profile');
    Route::get('/contestant/{contestant}/{signature?}', 'SayUncleController@contestantDetail')->name('contestant.details')->middleware('contestant.auth');
    Route::get('/payment/{contestant}/{signature?}', 'SayUncleController@paymentform' )->name('payment')->middleware('contestant.auth');
    Route::get('/video/{video_id}/upload/{contestant}/{signature?}', 'SayUncleController@uploadVideoForm' )->name('video.upload.form')->middleware('contestant.auth');
    Route::post('/video/upload/{contestant}/{signature?}', 'SayUncleController@uploadVideo' )->name('video.upload')->middleware('contestant.auth');
    Route::get('/imageUpload', 'SayUncleController@imageUpload')->name('imageUpload');

    


    Route::post('/validate/fields', 'SayUncleController@validateField')->name('validate.field');

    Route::post('/check/status', 'SayUncleController@getContestantLink')->name('check.status');
    Route::post('/contestant/{id}/vote', 'SayUncleController@voteContestantEmail')->name('contestant.vote.email');

    Route::get('/vote/contestant/{voter_number}', 'SayUncleController@voteContestant')->name('contestant.vote');

});
    


Auth::routes();

Route::group([
    'prefix' => '{role}',
    'where' => ['role' => '(seller|creative)'],
], function() {

    Route::match(['get', 'post'], 'ebook', 'Home');
    Route::match(['get', 'post'], '/', 'AboutUs');

});

Route::group([
    'prefix' => 'console',
    'as' => 'console.',
    'namespace' => 'Console',
    'middleware' => ['auth'],
], function() {

    Route::get('/', 'Index@index')->name('index');
    Route::get('/edit-password', 'Index@editPassword')->name('editPassword');
    Route::post('/update-password', 'Index@updatePassword')->name('updatePassword');

    Route::group([
        'prefix' => '{role}',
        'where' => ['role' => '(seller|influencer|all)'],
    ], function() {

        Route::match(['get', 'post'], 'aboutUs', 'AboutUs')->name('about_us');
    });

    Route::get('joinTheWave/{id?}', 'JoinTheWave')->name('joinTheWave');
    
    Route::group([
        'prefix' => 'events'], function() {

        Route::get('/', 'Events@index')->name('events');
        Route::get('/create', 'Events@create')->name('event.create');
        Route::post('/save', 'Events@save')->name('event.save');
        Route::get('/{id}/edit', 'Events@edit')->name('event.edit');
        Route::post('/{id}/update', 'Events@update')->name('event.update');
        Route::post('/{id}/delete', 'Events@delete')->name('event.delete');

    });

    Route::group([
        'prefix' => 'sayuncle/contestants',
        'as' => 'sayuncle.',
        
    ], function() {

        Route::get('/', 'SayUncleController@index')->name('contestants');
        Route::get('/{id}/show', 'SayUncleController@show')->name('contestant.show');
        Route::post('{id}/update/video/{videoId}/status', 'SayUncleController@updateVideoStatus')->name('update.video');
        
    });
});

Route::post('/joinTheWave', 'JoinTheWave')->name('joinTheWave');
Route::get('/events', 'GeneralController@events')->name('events');
Route::post('/email/event', 'GeneralController@eventEmail')->name('event.email');


Route::match(['GET', 'POST'],'/pay', 'RaveController@initialize')->name('pay');
Route::get('/rave/callback', 'RaveController@callback')->name('callback');


/////// New landing page
Route::get('/landing', function () {
    return view('landing.index');
});