<?php

Route::group(['middleware'=>'web'], function(){
	Route::resource('/admin/sliders', 'Locomotif\Sliders\Controller\SlidersController');
});
