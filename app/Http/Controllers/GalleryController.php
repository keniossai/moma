<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $data = [
            'page'      => 'Gallery',
            'photos'    => user()->galleries()->get()
        ];
        // Todo: Waiting for view from Ken
        return view('gallery.index', $data);
    }

    public function create()
    {
        // Todo: Waiting for view from Ken, He should use modal instead
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }


}
