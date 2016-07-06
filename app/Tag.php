<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tag extends Model
{

	protected $fillable = [
		'name'
	];
	
	public function getRouteKeyName()
    {
        return 'url_slug';
    }
	
	/**
	 * Get the videos associated with each tag.
	 * 
	 * @access public
	 * @return void
	 */
	public function videos() 
	{	
	
		return $this->belongsToMany('App\Video')->where('published_at', '<', Carbon::now())->withTimestamps();
		
	}

}
