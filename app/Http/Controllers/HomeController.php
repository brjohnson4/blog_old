<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Video;
use Carbon\Carbon;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    
	    $video = Video::where('published_at', '<', Carbon::now())->orderBy('published_at', 'desc')->first();
	    $topics = Tag::all()->random(10);
	    
        return view('home', compact('video', 'topics'));
    }
}
