<?php
	Route::group(['middleware' => ['auth:web'],   'namespace' => 'Admin','prefix'=>'admin'], function () {
		Route::resource('/servicio', 'ServicesController', ['except' => 'show']);
		Route::resource('/registro', 'UserAdminController', ['except' => 'show']);
	});