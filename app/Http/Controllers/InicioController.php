<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;
class InicioController extends Controller
{
	public function index()
	{	
		$videos=Video::all();
		return view('inicio.inicio')
			->with('videos',$videos);
	}
}
