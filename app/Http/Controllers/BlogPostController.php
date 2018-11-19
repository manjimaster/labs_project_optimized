<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contact;
use App\Text;
use App\Link;
use App\Article;
use App\Tag;
use App\Categorie;
use App\Instagram;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $contactData = Contact::find(1);
        $linksContent = Link::all();
        $footerLink = $linksContent[1]->content;
        $textsContent = Text::all();
        $categoriesContent = Categorie::all()->where('validation', 1);
        $instagramContent = Instagram::all();
        $tagsContent = Tag::all()->where('validation', 1);
        $article = Article::find($id);
        // dd(Article::with('article_images', 'tags', 'categories', 'comments')->get()[0]->tags);
        // dd(Article::find(1)->article_images->image_url_1);
        return view('blogPost', compact('contactData', 'footerLink', 'textsContent', 'categoriesContent', 'instagramContent', 'tagsContent', 'article'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
