<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

	protected $fillable = [
		'title',
		'youtube_id',
		'description',
		'views',
		'url_slug'
	];
	
	/**
	 * This sets the default identifier as the url_slug rather than id.
	 * 
	 * @access public
	 * @return void
	 */
	public function getRouteKeyName()
    {
        return 'url_slug';
    }

	
	public function tags()
	{
		
		return $this->belongsToMany('App\Tag')->withTimestamps();
		
	}
	
	/**
	 * Get a list of tags associated with each video.
	 * 
	 * @access public
	 * @return array
	 */
	public function getTagListAttribute() 
	{
		
		return $this->tags->lists('id')->all();
		
	}

}
