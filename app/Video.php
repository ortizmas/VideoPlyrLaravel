<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public static function getVideos()
    {
    	$videos = array(
    		['id'=> '1', 'title'=> 'Cras justo odio', 'key' => 'bTqVqk7FSmY'],
    		['id'=> '2', 'title'=> 'Dapibus ac facilisis in', 'key' => 'hOUvrWx5uVY'],
    		['id'=> '3', 'title'=> 'Morbi leo risus', 'key' => 'Z99JdmRnLQ0'],
    		['id'=> '4', 'title'=> 'Porta ac consectetur ac', 'key' => 'eJGM9foirPw'],
    		['id'=> '5', 'title'=> 'Vestibulum at eros', 'key' => 'TFGOzWeV2vY']

    	);

    	return $videos;
    }
}
