<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\CarouselImage;
use App\Service;
use App\Text;
use App\Link;
use App\Testimonial;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Icon;
use App\Newsletter;
use App\Comment;
use App\Http\Requests\CommentRequest;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactData = Contact::find(1);
        $linksContent = Link::all();
        $footerLink = $linksContent[1]->content;
        $textsContent = Text::all();
        $iconsContent = Icon::all();
        $carouselContent = CarouselImage::all();
        $testimonialsContent = Testimonial::all();
        $servicesContent = Service::with('icons')->paginate(9);
        $nbrServicesPages = $servicesContent->lastPage();
        $randomServices = Service::all()->random(3);
        $users = User::all();
        $permanentTeamMember = User::where('permanentTeamMember', 1)->get()[0];
        // dd($permanentTeamMember);
        $teamUsers = User::where('team', 1)->where('permanentTeamMember', '0')->get();
        $randomTeamUsers = $teamUsers->random(2);
        return view ('index', compact('contactData', 'footerLink', 'textsContent', 'carouselContent', 'randomServices', 'servicesContent', 'nbrServicesPages', 'linksContent', 'testimonialsContent', 'randomTeamUsers', 'permanentTeamMember', 'users', 'iconsContent'));
    }




    public function newsletterAdd(Request $request)
    {
        $mail = new Newsletter;
        $mail->email = $request->newNewsletter;
        $mail->save();
        return redirect()->route('index');
    }


    public function commentAdd(CommentRequest $request, $id)
    {
        $comment = new Comment;
        if(\Auth::check())
        {
            // dd(\Auth::user());
            $comment->name = \Auth::user()->firstName.' '. \Auth::user()->lastName;
            $comment->email = \Auth::user()->email;
            $comment->user_id = \Auth::user()->id;
            $comment->image = \Auth::user()->users_images->image_url_1;
        }
        else
        {
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->image = 'default_avatar..png';
        }

        $comment->subject = $request->subject;
        $comment->content = $request->content;
        $comment->article_id = $id;
        $comment->validation = 0;
        $comment->save();

        return back();
    }

    public function adminCommentAdd(CommentRequest $request, $id)
    {
        $comment = new Comment;
        if (\Auth::check()) {
            // dd(\Auth::user());
            $comment->name = \Auth::user()->firstName . ' ' . \Auth::user()->lastName;
            $comment->email = \Auth::user()->email;
            $comment->user_id = \Auth::user()->id;
            $comment->image = \Auth::user()->users_images->image_url_1;
        } else {
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->image = 'default_avatar..png';
        }

        $comment->subject = $request->subject;
        $comment->content = $request->content;
        $comment->article_id = $id;
        $comment->validation = 1;
        $comment->save();

        return back();
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
