<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function custom_propose() {
    	return redirect('/')->with(['_e3'=>'success']);
    }
}
