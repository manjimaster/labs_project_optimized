<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Http\Requests\CategoriesRequest;

class AdminCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CategoriesShow()
    {
        $allCategories = Categorie::all();

        return view('articles.seeCategories', compact('allCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CategoriesCreate(CategoriesRequest $request)
    {
        $categorie = new Categorie;
        $categorie->name = $request->newCategorie;
        $categorie->validation = 1;
        $categorie->save();

        return redirect()->route('showCategories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
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
    public function update(CategoriesRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function CategoriesDelete($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();

        return redirect()->route('showCategories');
    }

    public function CategoriesValidate($id)
    {
        $categorie = Categorie::find($id);
        $categorie->validation = 1;
        $categorie->save();

        return redirect()->route('showCategories');
    }
}
