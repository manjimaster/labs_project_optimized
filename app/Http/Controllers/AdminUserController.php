<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use ImageIntervention;

use App\User;
use App\Position;
use App\Role;
use Illuminate\Support\Facades\Hash;
use App\UsersImage;
use App\Tag;
use App\Article;
use App\Categorie;
use App\ArticleImage;
use App\Comment;
use App\Http\Requests\ArticleRequest;

class AdminUserController extends Controller
{

    public function usersShow()
    {
        $users = User::all();
        $positions = Position::all();
        $roles = Role::all();

        return view('account.users', compact('users', 'positions', 'roles'));
    }
    public function usersCreate(Request $request)
    {
        $item = new User;
        $item->firstNAme = $request->newFirstName;
        $item->lastNAme = $request->newLastName;
        $item->email = $request->newEmail;
        $item->team = $request->newTeam;
        $item->biography = 'About me : ';

        if ($request->newPermanent == 1) {
            $nbrOfUsers = User::all()->count();
            for ($i = 1; $i < ($nbrOfUsers + 1); $i++) {
                if ($i != $id) {
                    $userNoPermnanent = User::find($i);
                    $userNoPermnanent->permanentTeamMember = '0';
                    $userNoPermnanent->save();
                }
            }
        }

        $item->permanentTeamMember = $request->newPermanent;
        $item->password = Hash::make($request->newPassword);

        if ($request->newPosition) {
            $position = new Position;
            $position->name = $request->newPosition;
            $position->validation = 1;
            $position->save();
            $item->positions_id = $position->id;
        } else {
            $item->positions_id = $request->newPositionSelected;
        }
        $item->roles_id = $request->newRoleSelected;

        $imageItem = new UsersImage;

        if ($request->newImage) {

            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $original = ImageIntervention::make($image);

            Storage::put('public/images/originals/team/' . $fileName, $original->resize(360, 448)->save());

            Storage::put('public/images/modified/team/' . $fileName, $original->resize(100, 100)->save());

            $imageItem->image_url_1 = $fileName;

        }
        else
        {
            $imageItem->image_url_1 = 'user_1_profile_image.jpg';
        }
        $imageItem->save();

        $item->users_images_id = $imageItem->id;

        $item->save();

        return redirect()->route('showUsers');
    }
    public function usersEdit($id)
    {
        $user = User::find($id);
        $positions = Position::all();
        $roles = Role::all();
        return view('account.usersEdit', compact('user', 'positions', 'roles'));
    }
    public function usersUpdate(Request $request, $id)
    {
        $item = User::find($id);
        $item->firstNAme = $request->newFirstName;
        $item->lastNAme = $request->newLastName;
        $item->email = $request->newEmail;
        $item->team = $request->newTeam;

        if($request->newPermanent == 1)
        {
            $nbrOfUsers = User::all()->count();
            for($i = 1; $i < ($nbrOfUsers + 1); $i++)
            {
                if($i != $id)
                {
                    $userNoPermnanent = User::find($i);
                    $userNoPermnanent->permanentTeamMember = '0';
                    $userNoPermnanent->save();
                }
            }
        }

        $item->permanentTeamMember = $request->newPermanent;
        $item->password = Hash::make($request->newPassword);

        if($request->newPosition)
        {
            $position = new Position;
            $position->name = $request->newPosition;
            $position->validation = 1;
            $position->save();
            $item->positions_id = $position->id;
        }
        else
        {
            $item->positions_id = $request->newPositionSelected;
        }
        $item->roles_id = $request->newRoleSelected;

        if ($request->newImage) {

            $imageItem = UsersImage::find($item->users_images_id);
            if ($imageItem->image_url_1 != 'user_1_profile_image.jpg' && $imageItem->image_url_1 != 'user_2_profile_image.jpg' && $imageItem->image_url_1 != 'user_3_profile_image.jpg') {
                Storage::delete('public/images/originals/team/' . $imageItem->image_url_1);
                Storage::delete('public/images/modified/team/' . $imageItem->image_url_1);
            }

            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $original = ImageIntervention::make($image);

            Storage::put('public/images/originals/team/' . $fileName, $original->resize(360, 448)->save());

            Storage::put('public/images/modified/team/' . $fileName, $original->resize(100, 100)->save());

            $imageItem->image_url_1 = $fileName;

            $imageItem->save();
        }

        $item->save();

        return redirect()->route('showUsers');
    }
    public function usersDelete(Request $request, $id)
    {
        $item = User::find($id);
        $imageItem = UsersImage::find($item->users_images_id);

        $item->delete();
        $imageItem->delete();

        return redirect()->route('showUsers');
    }





    public function profileShow()
    {
        $user = User::find(\Auth::user()->id);

        return view('account.profile', compact('user'));
    }
    public function profileEdit($id)
    {
        $user = User::find($id);
        return view('account.profileEdit', compact('user'));
    }
    public function profileUpdate(Request $request, $id)
    {
        $item = User::find($id);
        $item->firstNAme = $request->newFirstName;
        $item->firstNAme = $request->newLastName;
        $item->email = $request->newEmail;
        $item->password = Hash::make($request->newPassword);
        $item->biography = $request->newBiography;
        
        if ($request->newImage) {
            
            $imageItem = UsersImage::find($item->users_images_id);
            if ($imageItem->image_url_1 != 'user_1_profile_image.jpg' && $imageItem->image_url_1 != 'user_2_profile_image.jpg' && $imageItem->image_url_1 != 'user_3_profile_image.jpg') {
                Storage::delete('public/images/originals/team/' . $imageItem->image_url_1);
                Storage::delete('public/images/modified/team/' . $imageItem->image_url_1);
            }
            
            $image = $request->newImage;
            
            $fileName = time() . $image->hashName();
            
            $original = ImageIntervention::make($image);

            Storage::put('public/images/originals/team/'.$fileName, $original->resize(360, 448)->save());
            
            Storage::put('public/images/modified/team/'.$fileName, $original->resize(100, 100)->save());
            
            $imageItem->image_url_1 = $fileName;
            
            $imageItem->save();
        }
        
        $item->save();
        return redirect()->route('showProfile');
    }


    public function ArticleToValidateShow()
    {
        $tagsContent = Tag::all()->where('validation', 1);
        $articlesContent = Article::where('validation', '=', 0)->paginate(1);
        $nbrArticlesPages = $articlesContent->lastPage();
        // if(\Auth::user()->roles->name == 'admin')
        // {
        //     return view('articles.seeAllArticles', compact('tagsContent', 'articlesContent', 'articleTags', 'articleComments', 'nbrArticlesPages'));
        // }
        return view('articles.seeArticlesToValidate', compact('tagsContent', 'articlesContent', 'nbrArticlesPages'));
    }
    public function validateArticle($id)
    {
       $article = Article::find($id);
       $article->validation = 1;
       $article->save();
       
       $tagsContent = Tag::all()->where('validation', 1);
        $articlesContent = Article::where('validation', '=', 0)->paginate(1);
        $nbrArticlesPages = $articlesContent->lastPage();
       return view('articles.seeArticlesToValidate', compact('tagsContent', 'articlesContent', 'nbrArticlesPages'));
    }
    public function ArticleSeeAll()
    {
        $tagsContent = Tag::all()->where('validation', 1);
        $articlesContent = Article::where('validation', '=', 1)->orWhere('validation', '=', 0)->paginate(1);
        $nbrArticlesPages = $articlesContent->lastPage();
        return view('articles.seeAllArticles', compact('tagsContent', 'articlesContent', 'nbrArticlesPages'));
    }
    public function ArticleOfUserShow($id)
    {
        $tagsContent = Tag::all()->where('validation', 1);
        $articlesContent = Article::where('user_id', '=', $id)->paginate(1);
        $nbrArticlesPages = $articlesContent->lastPage();
        return view('articles.seeArticles', compact('tagsContent', 'articlesContent', 'nbrArticlesPages'));
    }
    public function ArticleOfUserCreatePage()
    {
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('articles.writeArticles', compact('tags', 'categories'));
    }
    public function ArticleOfUserCreate(ArticleRequest $request)
    {
        $article = new Article;

        $allTags = Tag::all();
        $allCategories = Categorie::all();

        $article->title = $request->newTitle;
        $article->preview_content = $request->previewContent;
        $article->full_content = $request->fullContent;
        $article->user_id = \Auth::user()->id;
        $article->validation = 0;

        $imageItem = new ArticleImage;

        if ($request->newImage) {


            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $image->storeAs('public/images/originals/blog/', $fileName);

            $original = ImageIntervention::make($image);

            Storage::put('public/images/modified/blog/' . $fileName, $original->resize(700, 250)->save());

            $imageItem->image_url_1 = $fileName;

        }
        else
        {
            $imageItem->image_url_1 = 'article_1_image_1.jpg';
        }
        $imageItem->save();
        
        $article->article_images_id = $imageItem->id;

        $article->save();
        // Tags

        foreach ($allTags as $key => $tag) {
        // verfication si tag actuels gardés ou non
            $tagInputName = 'tag' . $key;
            if ($request->$tagInputName == '1') {
                $article->tags()->attach($tag);
                $article->save();
            } else {
                $article->tags()->detach($tag);
                $article->save();
            }
        }
        // création tag
        if ($request->newTag) {
            $createdTag = new Tag;
            $createdTag->name = $request->newTag;
            $createdTag->validation = 0;
            $createdTag->save();
            $article->tags()->attach($createdTag);
            $article->save();
        }

        // Categories

        foreach ($allCategories as $key => $cat) {
        // verfication si tag actuels gardés ou non
            $catInputName = 'cat' . $key;
            if ($request->$catInputName == '1') {
                $article->categories()->attach($cat);
                $article->save();
            } else {
                $article->categories()->detach($cat);
                $article->save();
            }
        }
        // création categorie
        if ($request->newCategorie) {
            $createdCategorie = new Categorie();
            $createdCategorie->name = $request->newCategorie;
            $createdCategorie->validation = 0;
            $createdCategorie->save();
            $article->categories()->attach($createdCategorie);
            $article->save();
        }

        $article->save();

        return redirect()->route('showPersonalArticles', \Auth::user()->id);
    }
    public function ArticleOfUserEdit($id)
    {
        $article = Article::find($id);
        // dd($article->tags);
        $articleTags = $article->tags;
        $articleCategories = $article->categories;
        $tags = Tag::all();
        $categories = Categorie::all();
        $test;
        return view('articles.editArticles', compact('article', 'articleTags', 'articleCategories', 'tags', 'categories', 'test'));
    }
    public function ArticleOfUserUpdate(Request $request, $id)
    {
        $article = Article::find($id);
        $articleTags = $article->tags;
        $articleCategories = $article->categories;
        // dd($articleCategories);
        // foreach ($articleCategories as $key => $caregorie) {
        //     dd($request->cat2);
        // }
        $tags = Tag::all();
        $categories = Categorie::all();

        $article->title = $request->newTitle;
        $article->preview_content = $request->previewContent;
        $article->full_content = $request->fullContent;

        if ($request->newImage) {

            $imageItem = ArticleImage::find($article->article_images_id);
            if ($imageItem->image_url_1 != 'article_1_image_1.jpg' && $imageItem->image_url_1 != 'article_2_image_1.jpg' && $imageItem->image_url_1 != 'article_3_image_1.jpg') {
                Storage::delete('public/images/originals/blog/' . $imageItem->image_url_1);
                Storage::delete('public/images/modified/blog/' . $imageItem->image_url_1);
            }

            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $image->storeAs('public/images/originals/blog/', $fileName);

            $original = ImageIntervention::make($image);

            Storage::put('public/images/modified/blog/' . $fileName, $original->resize(700, 250)->save());

            $imageItem->image_url_1 = $fileName;

            $imageItem->save();
        }

        // Tags

        foreach ($articleTags as $key => $tag) {
        // verfication si tag actuels gardés ou non
            $tagInputName = 'tag' . $key;
            if ($request->$tagInputName == '1') {
            } else {
                $article->tags()->detach($tag);
                $article->save();
            }

        }
        if($request->newCategorieSelected)
        {
            $article->tags()->attach($request->newTagSelected);
            $article->save();
        }
        // création tag
        if ($request->newTag) {
            $createdTag = new Tag();
            $createdTag->name = $request->newTag;
            $createdTag->validation = 0;
            $createdTag->save();
            $article->tags()->attach($createdTag);
            $article->save();
        }

        // Categories

        foreach ($articleCategories as $key => $cat) {
        // verfication si tag actuels gardés ou non
            $catInputName = 'cat' . $key;
            if ($request->$catInputName == '1') {
            } else {
                $article->categories()->detach($cat);
                $article->save();
            }

        }
        if ($request->newCategorieSelected) {
            $article->categories()->attach($request->newCategorieSelected);
            $article->save();
        }
        // création categorie
        if ($request->newCategorie) {
            $createdCategorie = new Categorie();
            $createdCategorie->name = $request->newCategorie;
            $createdCategorie->validation = 0;
            $createdCategorie->save();
            $article->categories()->attach($createdCategorie);
            $article->save();
        }

        $article->save();

        return redirect()->route('showPersonalArticles', \Auth::user()->id);
    }



    public function CommentToValidateShow()
    {
        $commentsContent = Comment::where('validation', '=', 0)->paginate(10);
        $nbrCommentsPages = $commentsContent->lastPage();
        return view('articles.seeCommentsToValidate', compact('commentsContent', 'nbrCommentsPages'));
    }
    public function validateComment($id)
    {
        $comment = Comment::find($id);
        $comment->validation = 1;
        $comment->save();

        $commentsContent = Comment::where('validation', '=', 0)->paginate(10);
        $nbrCommentsPages = $commentsContent->lastPage();
        return view('articles.seeCommentsToValidate', compact('commentsContent', 'nbrCommentsPages'));
        }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
