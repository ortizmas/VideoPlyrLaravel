<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public static function getVideos()
    {
    	$videos = array(
    		['id'=> '1', 'title'=> 'Cras justo odio', 'code' => 'bTqVqk7FSmY'],
    		['id'=> '2', 'title'=> 'Dapibus ac facilisis in', 'code' => 'hOUvrWx5uVY'],
    		['id'=> '3', 'title'=> 'Morbi leo risus', 'code' => 'Z99JdmRnLQ0'],
    		['id'=> '4', 'title'=> 'Porta ac consectetur ac', 'code' => 'eJGM9foirPw'],
    		['id'=> '5', 'title'=> 'Vestibulum at eros', 'code' => 'TFGOzWeV2vY']

    	);

    	return $videos;
    }

    public static function getById($id)
    {
        $videos = array(
            ['id'=> '1', 'title'=> 'Cras justo odio', 'code' => 'bTqVqk7FSmY'],
            ['id'=> '2', 'title'=> 'Dapibus ac facilisis in', 'code' => 'hOUvrWx5uVY'],
            ['id'=> '3', 'title'=> 'Morbi leo risus', 'code' => 'Z99JdmRnLQ0'],
            ['id'=> '4', 'title'=> 'Porta ac consectetur ac', 'code' => 'eJGM9foirPw'],
            ['id'=> '5', 'title'=> 'Vestibulum at eros', 'code' => 'TFGOzWeV2vY']

        );

        $collection = collect($videos);

        return $collection->firstWhere('id', '=', $id);
        
    }
}
