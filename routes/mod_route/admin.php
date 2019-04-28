<?php
	Route::group(['middleware' => ['auth']], function () {
		Route::group(['middleware' => ['role:admin']], function () {

			Route::get('submissions', function(){
				return View('contents.admin.submission');
			});

		});
	});

