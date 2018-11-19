<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use SoftDeletes;
use Illuminate\Support\Facades\Storage;
use ImageIntervention;

use App\Project;
use App\Icon;
use App\ProjectImage;

class AdminServiceController extends Controller
{

    public function projectShow()
    {
        $projectsContent = Project::all();
        $iconsContent = Icon::orderBy('name')->get();

        return view('admin.allProjects', compact('projectsContent', 'iconsContent'));
    }
    public function projectCreate(Request $request)
    {
        $item = new Project;

        $imageItem = new ProjectImage;

        $item->name = $request->newName;
        $item->content = $request->newContent;
        $item->icons_id = $request->newIconSelected;

        if ($request->newImage) {

            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $image->storeAs('public/images/originals/', $fileName);

            $original = ImageIntervention::make($image);

            Storage::put('public/images/modified/' . $fileName, $original->resize(400, 300)->save());

            $imageItem->image_url_1 = $fileName;
        } else {
            $imageItem->image_url_1 = 'project_1_image_1.jpg';
        }
        
        $imageItem->save();

        $item->project_images_id = $imageItem->id;

        $item->save();
        return redirect()->route('showProject');
    }
    public function projectEdit($id)
    {
        $project = Project::find($id);
        $iconsContent = Icon::orderBy('name')->get();
        return view('admin.allProjectsEdit', compact('project', 'iconsContent'));
    }
    public function projectUpdate(Request $request, $id)
    {
        $item = Project::find($id);
        $item->name = $request->newName;
        $item->content = $request->newContent;
        $item->icons_id = $request->newIconSelected;
        $item->save();

        if ($request->newImage) {

            $imageItem = ProjectImage::find($item->project_images_id);
            if ($imageItem->image_url_1 != 'project_1_image_1.jpg' && $imageItem->image_url_1 != 'project_2_image_1.jpg' && $imageItem->image_url_1 != 'project_3_image_1.jpg') {
                Storage::delete('public/images/originals/' . $imageItem->image_url_1);
                Storage::delete('public/images/modified/' . $imageItem->image_url_1);
            }

            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $image->storeAs('public/images/originals/', $fileName);

            $original = ImageIntervention::make($image);

            Storage::put('public/images/modified/' . $fileName, $original->resize(400, 271)->save());

            $imageItem->image_url_1 = $fileName;

            $imageItem->save();
        }

        return redirect()->route('showProject');
    }
    public function projectDelete(Request $request, $id)
    {
        $item = Project::find($id);
        $imageItem = ProjectImage::find($item->project_images_id);

        $item->delete();
        $imageItem->delete();

        return redirect()->route('showProject');
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
