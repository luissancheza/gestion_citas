<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromocionesController extends Controller
{
    function all(Request $request) {
		$promociones = "";
	    return $request->user();
	}
}
