<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Text;
use App\Link;
use App\Categorie;
use App\Instagram;
use App\Tag;
use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Testimonial;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactData = Contact::getContacts(1);
        $linksContent = Link::all();
        $footerLink = $linksContent[1]->content;
        $textsContent = Text::all();
        $categoriesContent = Categorie::all()->where('validation', 1);
        $instagramContent = Instagram::all();
        $tagsContent = Tag::all()->where('validation', 1);
        $articlesContent = Article::with('article_images')->where('validation', 1)->paginate(3);
        // dd(Article::with('article_images', 'tags', 'categories', 'comments')->get()[0]->tags);
        $ArticleFullReferenced = Article::with('article_images', 'tags', 'categories', 'comments')->get();
        $nbrArticlesPages = $articlesContent->lastPage();
        // dd(Article::find(1)->article_images->image_url_1);
        return view('blog', compact('contactData', 'footerLink', 'textsContent', 'categoriesContent', 'instagramContent', 'tagsContent', 'articlesContent', 'nbrArticlesPages', 'ArticleFullReferenced'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        return redirect('/results/' . $search);
    }
    public function results($search, Request $request)
    {
        $allarticles = Article::with('users', 'comments', 'tags')->get();

        $tagmatch = Tag::where('name', $search)->first();
        $Categoriematch = Categorie::where('name', $search)->first();
        $results = collect([]);
      // dd($tagmatch);
      // dd($Categoriematch);

        foreach ($allarticles as $article) {
        // NAME Search
            if (preg_match('/\b' . $search . '\b/i', $article->title)) {
                if (!$results->contains($article)) {
                    $results->push($article);
                }
            }
        // TAGS Search
            if ($tagmatch) {
                foreach ($article->tags as $tag) {
                    if ($tag->name == $tagmatch->name) {
                        if (!$results->contains($article)) {
                            $results->push($article);
                        }
                    }
                }
            }
        // Categorie Search
            if ($Categoriematch) {
                foreach ($article->categories as $Categorie) {
                    if ($Categorie->name == $Categoriematch->name) {
                        if (!$results->contains($article)) {
                            $results->push($article);
                        }
                    }
                }
            }
        }

        $results->sortByDesc('created_at');
      // Collection Pagination Fix
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 3;
        $currentPageItems = $results->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems = new LengthAwarePaginator($currentPageItems, count($results), $perPage);
        $paginatedItems->setPath($request->url());
        $text = Text::find(1);
        $nbrArticlesPages = $paginatedItems->lastPage();
        $categoriesContent = Categorie::all()->where('validation', 1);
        $instagramContent = Instagram::all();
        $tagsContent = Tag::all()->where('validation', 1);
        $textsContent = Text::all();
        $linksContent = Link::all();
        $footerLink = $linksContent[1]->content;
        return view('blogSearch', ['results' => $paginatedItems], compact('text', 'search', 'categoriesContent', 'instagramContent', 'tagsContent', 'textsContent', 'footerLink', 'nbrArticlesPages'));
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
