<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Video;
use App\Tag;
use Carbon\Carbon;


class SearchController extends Controller
{

	public function __construct()
	{
	    $this->middleware('auth', [
		    'only' => 'search_array'
	    ]);
	}	

	public function search()
	{

		return view('search.index');
		
	}
	
	public function search_array()
	{
		
		$videos = Video::with('tags')->orderBy('published_at', 'desc')->where('published_at', '<', Carbon::now())->get();
		
		return view('search_array', compact('videos'));
		
	}

}
