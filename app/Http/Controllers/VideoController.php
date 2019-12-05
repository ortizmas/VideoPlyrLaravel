<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}