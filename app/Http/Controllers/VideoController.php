<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VideoRequest;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Youtube;
use App\Video;
use App\Tag;
use Carbon\Carbon;

class VideoController extends Controller
{

	public function __construct()
	{
	    $this->middleware('auth', [
		    'only' => ['create', 'edit', 'update', 'store']
	    ]);
	}	

	public function index(Request $request)
	{

		$sort = $request->sort;

		switch($sort) {
			case "oldest":
				$videos = Video::where('published_at', '<', Carbon::now())->orderBy('published_at', 'asc')->paginate(10);
				$sortedBy = "Oldest to Newest";
				break;
			case "newest":
				$videos = Video::where('published_at', '<', Carbon::now())->orderBy('published_at', 'desc')->paginate(10);
				$sortedBy = "Newest to Oldest";				
				break;
			case "most_views":
				$videos = Video::where('published_at', '<', Carbon::now())->orderBy('views', 'desc')->paginate(10);
				$sortedBy = "Most to Fewest Views";
				break;
			case "fewest_views":
				$videos = Video::where('published_at', '<', Carbon::now())->orderBy('views', 'asc')->paginate(10);
				$sortedBy = "Fewest to Most Views";
				break;
			default:
				$videos = Video::where('published_at', '<', Carbon::now())->orderBy('published_at', 'desc')->paginate(10);
			}
					
		return view('videos.index', compact('videos', 'sort', 'sortedBy'));
	}

	public function updateViews()
	{

		$videos = Video::where('published_at', '<', Carbon::now())->get();
		foreach ($videos as $video) {
			$youtube = Youtube::getVideoInfo($video->youtube_id);
			Video::where('id', $video->id)->update([
				'views' => $youtube->statistics->viewCount,
				'likes' => $youtube->statistics->likeCount,
			]);
			}
	}


	public function show(Video $video)
	{
		$youtube = Youtube::getVideoInfo($video->youtube_id);
		Video::where('id', $video->id)->update([
			'views' => $youtube->statistics->viewCount,
			'likes' => $youtube->statistics->likeCount,
			'published_at' => $youtube->snippet->publishedAt,
		]);
		return view('videos.show', compact('video', 'youtube'));
		
	}
	
	public function create() 
	{
		$tags = Tag::lists('name', 'id');
		
		return view('videos.create', compact('tags'));
	}

	public function store(VideoRequest $request)
	{
		Video::insert([
			'title' => $request->input('title'),
			'youtube_id' => $request->input('youtube_id'),
			'url_slug' => $request->input('url_slug'),
			'length' => $request->input('length'),
			'description' => $request->input('description'),
			'published_at' => $request->input('published_at'),
			
		]);
		$video = Video::where('url_slug', $request->input('url_slug'))->first();
		$video->tags()->sync($request->input('tag_list'));
		return redirect('videos');
		
	}
	
	public function edit(Video $video)
	{
		$tags = Tag::lists('name', 'id');
						
		return view('videos.edit', compact('video', 'tags'));
	}
	
	public function update(Video $video, VideoRequest $request)
	{
		$video->update($request->all());
			
		$video->tags()->sync($request->input('tag_list'));	
				
		//$this->syncTags($video, $request->input('tag_list'));
		
		return redirect('videos/' . $video->url_slug);
	}	

	private function syncTags(Video $video, $tags)
	{
				
		$video->tags()->sync((array) $tags);
		
	}

}
