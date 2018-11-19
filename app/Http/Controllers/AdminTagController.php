<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests\TagsRequest;

class AdminTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TagsShow()
    {
        $allTags = Tag::all();

        return view('articles.seeTags', compact('allTags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TagsCreate(TagsRequest $request)
    {
        $tag = new Tag;
        $tag->name = $request->newTag;
        $tag->validation = 1;
        $tag->save();

        return redirect()->route('showTags');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagsRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function TagsDelete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return redirect()->route('showTags');
    }

    public function TagsValidate($id)
    {
        $tag = Tag::find($id);
        $tag->validation = 1;
        $tag->save();

        return redirect()->route('showTags');
    }
}
