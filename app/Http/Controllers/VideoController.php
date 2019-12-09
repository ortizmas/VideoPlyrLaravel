<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $keyVideo = 'bTqVqk7FSmY';
        $videos = Video::getVideos();

        return view('videos.index', compact('videos', 'keyVideo'));
    }

    public function preview($id = null)
    {
        $videos = Video::getVideos();

        foreach ($videos as $value) {
            if ($value['id'] == $id) {
                $keyVideo = $value['key'];
            }
        }

        $show = true;

        return view('videos.index', compact('show', 'videos', 'keyVideo'));
    }

    public function list($id = null)
    {
        $videos = Video::getVideos();

        $keyVideo = 'bTqVqk7FSmY';

        foreach ($videos as $value) {
            if ($value['id'] == $id) {
                $keyVideo = $value['key'];
            }
        }

        $show = true;

        return view('videos.list', compact('show', 'videos', 'keyVideo'));
    }

    public function carregarAjax($id = null)
    {
        $videos = Video::getVideos();

        $keyVideo = 'bTqVqk7FSmY';

        foreach ($videos as $value) {
            if ($value['id'] == $id) {
                $keyVideo = $value['key'];
            }
        }

        $show = true;

        //return view('videos.list', compact('show', 'videos', 'keyVideo'))->render();
        $data = array(
            'key' => $keyVideo,
            'status' => 200
        );
        return response()->json($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function getVideos()
    {
        return Video::getVideos();
    }

    public function show($id)
    {
        return Video::getById($id);
    }

    public function edit(Video $video)
    {
        //
    }

    public function update(Request $request, Video $video)
    {
        //
    }

    public function destroy(Video $video)
    {
        //
    }
}