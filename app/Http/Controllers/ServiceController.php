<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Text;
use App\Link;
use App\Service;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\Icon;

class ServiceController extends Controller
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
        $servicesContent = Service::with('icons')->paginate(9);
        $nbrServicesPages = $servicesContent->lastPage();
        $lastSixProjects = Project::orderBy('id', 'desc')->take(6)->get()->reverse();
        $lastThreeProjects = Project::orderBy('id', 'desc')->take(3)->get()->reverse();
        $iconsContent = Icon::all();
        return view('services', compact('contactData', 'footerLink', 'textsContent', 'servicesContent', 'nbrServicesPages', 'lastSixProjects', 'lastThreeProjects', 'iconsContent'));
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
