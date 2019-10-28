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

Route::get('/', function () {
    return view('home')->with('demo_str',Str::random(6));
});


Route::get('/{msg_key}',function($msg_key) {
    $message = Cache::get($msg_key);
   return view('edit')->with('msg_key',$msg_key)
            ->with('message', $message ?? '');
});

Route::post('/{msg_key}',function($msg_key) {
    
    $message = Request::get('message');

    $result = Cache::put($msg_key,$message,60*30);
    
    if( $result === false ){
        return view('edit')
        ->with('msg_key',$msg_key)
        ->with('message',$message)
        ->withErrors(['Save Error']);
    }

    return view('edit')
        ->with('msg_key',$msg_key)
        ->with('message',$message)
        ->with('success','儲存成功');
 });