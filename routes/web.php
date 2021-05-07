<?php

use Illuminate\Support\Facades\Route;

 

/*Route::get('/', function () {
    return view('index');
});*/
//use App\mundoTec\Btn;
Route::get('/',function(){
	//$link=new Btn;

	//return $link->a('priemro','about acerca de ...');
	return view('welcome');
});

 
