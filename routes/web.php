<?php
config()->set(['url_prefix'=>Request::segment(1)]);
$school = new \App\School();
$school = $school->select('nickname')->where('nickname',config('url_prefix'))->get()->toArray();
//dd($school);

if(count($school))
{
    $school =$school[0]['nickname'];
    if($school==config('url_prefix'))
    {
        Route::get($school.'/', function () use ($school) {
            return view('welcome');
        });
        Route::get($school.'/home', 'HomeController@index');
        Route::group(['prefix' => $school, 'as'=>$school.'.'], function () {
            Route::auth();
        });
    }
}
else
{
    Route::get('/', function (){
        return view('welcome');
    });
}

//dd(Route::getRoutes());

