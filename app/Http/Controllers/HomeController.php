<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\Article;
use App\Comment;
use App\Tag;
use App\Categorie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // // $users = User::where('id', 1)->with('roles')->First()->roles->First()->name; //recuper role de user id 1
        // // $users = Role::where('id', 1)->with('users')->get(); //recuperer user de role id 1
        // $users = Role::where('name', 'editor')->with('users')->get(); //recuperer user de role editor
        // // $users = User::find(1)->roles()->orderBy('name'); //faux
        // // dd($users);
        // // dd($users[0]->roles[0]->name);
        // return view('home', compact('users'));
        $articlesToValidate = Article::where('validation', 0)->count();
        $commentsToValidate = Comment::where('validation', 0)->count();
        $tagsToValidate = Tag::where('validation', 0)->count();
        $categoriesToValidate = Categorie::where('validation', 0)->count();
        // dd($articlesToValidate);
        if (\Auth::user()->roles->name == 'admin') {
            return view('home', compact('articlesToValidate', 'commentsToValidate', 'tagsToValidate', 'categoriesToValidate'));
        }
        else
        {
            return redirect()->route('showProfile');
        }
    }
}
