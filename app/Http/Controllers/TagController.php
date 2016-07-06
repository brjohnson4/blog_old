<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Video;

class TagController extends Controller
{

	public function index()
	{
		
		$tags = Tag::orderBy('name')->get();
		
		return view('tags.index', compact('tags'));
		
	}
	
	public function show($url_slug, Request $request)
	{

		$tag = Tag::where('url_slug', $url_slug)->first();
		$videos = $tag->videos->where('title', '=', 'Future Active Participles')->sortBy('published_at')->all();
		
		$sort = $request->sort;

		switch($sort) {
			case "oldest":
				$videos = $tag->videos->sortBy('published_at')->all();
				break;
			case "newest":
				$videos = $tag->videos->sortByDesc('published_at')->all();
				break;
			case "most_views":
				$videos = $tag->videos->sortByDesc('views')->all();
				break;
			case "fewest_views":
				$videos = $tag->videos->sortBy('views')->all();
				break;
			case "most_likes":
				$videos = $tag->videos->sortByDesc('likes')->all();
				break;
			case "fewest_likes":	
				$videos = $tag->videos->sortBy('likes')->all();
				break;
			default:
				$videos = $tag->videos->sortByDesc('published_at')->all();
			}

		return view('tags.show', compact('tag', 'videos', 'sort'));
	}

}
