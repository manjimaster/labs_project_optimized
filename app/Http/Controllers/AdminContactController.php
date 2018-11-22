<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class AdminContactController extends Controller
{
    public function contactShow()
    {
        $contact = Contact::getContacts(1);
        return view('admin.contact', compact('contact'));
    }
    public function contactEdit()
    {
        $contact = Contact::getContacts(1);
        return view('admin.contactEdit', compact('contact'));
    }
    public function contactUpdate(Request $request)
    {
        $item = Contact::find(1);
        $item->title_1 = $request->newTitle1;
        $item->content = $request->newContent;
        $item->title_2 = $request->newTitle2;
        $item->address_1 = $request->newAddress1;
        $item->address_2 = $request->newAddress2;
        $item->phone_1 = $request->newPhone1;
        $item->email_1 = $request->newEmail1;

        $item->save();

        return redirect()->route('showContact');
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
