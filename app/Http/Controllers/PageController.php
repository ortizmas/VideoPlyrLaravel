<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {   
        if($request->ajax()){
            return Page::where('user_id', auth()->id())->get();
        }else{
            return view('pages.index');
        }
    }

    public function store(Request $request)
    {
        $page = new Page();
        $page->parent_id = $request->parent_id;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->descripcion = $request->descripcion;
        $page->content = $request->content;
        $page->enable = $request->enable;
        $page->redirect = $request->redirect;
        $page->external_url = $request->external_url;
        $page->target = $request->target;
        $page->order = $request->order;
        $page->section_id = 2;
        $page->user_id = auth()->id();
        $page->save();

        return $page;
    } 

    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        $page->parent_id = $request->parent_id;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->descripcion = $request->descripcion;
        $page->content = $request->content;
        $page->enable = $request->enable;
        $page->redirect = $request->redirect;
        $page->external_url = $request->external_url;
        $page->target = $request->target;
        $page->order = $request->order;
        $page->section_id = 2;
        $page->user_id = auth()->id();
        $page->save();

        return $page;
    } 

    public function destroy($id)
    {
        $nota = Page::find($id);
        $nota->delete();
    }
}
