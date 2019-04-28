<?php
	Route::group(['middleware' => ['auth']], function () {
		Route::group(['middleware' => ['role:admin']], function () {

			Route::get('submissions', function(){
				return View('contents.admin.submission');
			});
			Route::get('guides', function(){
				return View('contents.admin.guides');
			});			
			Route::get('tourist', function(){
				return View('contents.admin.tourist');
			});	

			Route::get('destinasi', function() {
				return View('contents.admin.destinasi');
			});

			Route::get('toko-buah-tangan', function() {
				return View('contents.admin.tokobuahtangan');
			});			

		});
	});

