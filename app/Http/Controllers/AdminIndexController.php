<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SoftDeletes;
use Illuminate\Support\Facades\Storage;
use ImageIntervention;

use App\CarouselImage;
use App\Text;
use App\Link;
use App\Testimonial;
use App\TestimonialImage;
use App\Service;
use App\Icon;
use App\Http\Requests\TestimonialsRequest;

class AdminIndexController extends Controller
{
    public function logoShow()
    {
        return view('admin.logo');
    }
    public function logoUpdate(TestimonialsRequest $request)
    {
        if ($request->newLogo) {
            $image = $request->newLogo;
            $bigLogoName = 'big-logo.png';
            $logoName = 'logo.png';

            $image->storeAs('public/images/originals', $bigLogoName);
            $image->storeAs('public/images/modified', $bigLogoName);
        // $image->storeAs('public/images/modified', $fileName);
            $original = ImageIntervention::make($image);
            Storage::put('public/images/originals/' . $logoName, $original->resize(111, 32)->save());
            Storage::put('public/images/modified/' . $logoName, $original->resize(111, 32)->save());
        }
        return view('admin.logo');
    }




    public function carouselShow()
    {
        $carouselContent = CarouselImage::all();
        return view('admin.carousel', compact('carouselContent'));
    }
    public function carouselCreate(TestimonialsRequest $request)
    {
        if($request->newImage)
        {
            $item = new CarouselImage;

            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $image->storeAs('public/images/originals', $fileName);
            $image->storeAs('public/images/modified', $fileName);

            $item->image_url = $fileName;

            $item->save();
        }
        return redirect()->route('showCarousel');
    }
    public function carouselEdit($id)
    {
        $image = CarouselImage::find($id);
        return view('admin.carouselEdit', compact('image'));
    }
    public function carouselUpdate(TestimonialsRequest $request, $id)
    {
        if ($request->newImage) {
            $item = CarouselImage::find($id);

            if ($item->image_url != 'carousel_image_1.jpg' && $item->image_url != 'carousel_image_2.jpg') {
                Storage::delete('public/images/originals/' . $item->image_url);
                Storage::delete('public/images/modified/' . $item->image_url);
            }


            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $image->storeAs('public/images/originals', $fileName);
            $image->storeAs('public/images/modified', $fileName);

            $item->image_url = $fileName;

            $item->save();
        }
        return redirect()->route('showCarousel');
    }
    public function carouselDelete(TestimonialsRequest $request, $id)
    {
        $item = CarouselImage::find($id);

        $item->delete();
        return redirect()->route('showCarousel');
    }




    public function inv1Show()
    {
        $text = Text::where('uses', '1b1')->get()[0];
        $textAbout = Text::where('uses', '1b2')->get()[0];
        return view('admin.inv1', compact('text', 'textAbout'));
    }
    public function inv1Edit($id)
    {
        $text = Text::find($id);
        return view('admin.inv1Edit', compact('text'));
    }
    public function inv1Update(TestimonialsRequest $request, $id)
    {
        $item = Text::find($id);

        $item->content_p1 = $request->new1bp1;
        $item->content_p2 = $request->new1bp2;
        $item->content_p3 = $request->new1bp3;

        $item->save();

        return redirect()->route('showInv1');
    }





    public function videoShow()
    {
        $video = Link::where('uses', '1a')->get()[0];
        return view('admin.video', compact('video'));
    }
    public function videoUpdate1(TestimonialsRequest $request)
    {
        if ($request->newBackground) {
            $image = $request->newBackground;
            $fileName = 'video.jpg';
            
            $image->storeAs('public/images/originals', $fileName);
            $image->storeAs('public/images/modified', $fileName);
        }
        return redirect()->route('showVideo');
    }
    public function videoEdit($id)
    {
        $video = Link::find($id);
        return view('admin.videoEdit', compact('video'));
    }
    public function videoUpdate2(TestimonialsRequest $request, $id)
    {
        $item = Link::find($id);

        $item->content = $request->newLink;

        $item->save();

        return redirect()->route('showVideo');
    }




    public function testimonialShow()
    {
        $testimonialsContent = Testimonial::all();
        return view('admin.testimonials', compact('testimonialsContent'));
    }
    public function testimonialCreate(TestimonialsRequest $request)
    {
        $item = new Testimonial;

        $imageItem = new TestimonialImage;

        $item->name = $request->newName;
        $item->position = $request->newPosition;
        $item->content = $request->newContent;
        $item->save();
        if ($request->newImage) {

            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $image->storeAs('public/images/originals/avatar/', $fileName);

            $original = ImageIntervention::make($image);

            Storage::put('public/images/modified/avatar/' . $fileName, $original->resize(100, 100)->save());

            $imageItem->image_url_1 = $fileName;

        }
        else
        {
            $imageItem->image_url_1 = 'default_avatar.png';
        }

        $imageItem->save();
        $item->testimonial_images_id = $imageItem->id;

        $item->save();

        return redirect()->route('showTestimonial');
    }
    public function testimonialEdit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonialEdit', compact('testimonial'));
    }
    public function testimonialUpdate(TestimonialsRequest $request, $id)
    {
        $item = Testimonial::find($id);

        $item->name = $request->newName;
        $item->position = $request->newPosition;
        $item->content = $request->newContent;
        $item->save();
        if ($request->newImage) {

            $imageItem = TestimonialImage::find($item->testimonial_images_id);

            if ($imageItem->image_url_1 != 'testimonial_1_profile_image.jpg' && $imageItem->image_url_1 != 'testimonial_2_profile_image.jpg' && $imageItem->image_url_1 != 'testimonial_3_profile_image.jpg' && $imageItem->image_url_1 != 'default_avatar.png') {
                Storage::delete('public/images/originals/' . $imageItem->image_url_1);
                Storage::delete('public/images/modified/' . $imageItem->image_url_1);
            }

            $image = $request->newImage;

            $fileName = time() . $image->hashName();

            $image->storeAs('public/images/originals/avatar/', $fileName);

            $original = ImageIntervention::make($image);

            Storage::put('public/images/modified/avatar/' . $fileName, $original->resize(100, 100)->save());

            $imageItem->image_url_1 = $fileName;

            $imageItem->save();
        }

        return redirect()->route('showTestimonial');
    }
    public function testimonialDelete(TestimonialsRequest $request, $id)
    {
        $item = Testimonial::find($id);
        $imageItem = TestimonialImage::find($item->testimonial_images_id);

        $item->delete();
        $imageItem->delete();

        return redirect()->route('showTestimonial');
    }




    public function serviceShow()
    {
        $servicesContent = Service::all();
        $iconsContent = Icon::orderBy('name')->get();

        return view('admin.services', compact('servicesContent', 'iconsContent'));
    }
    public function serviceCreate(TestimonialsRequest $request)
    {
        $item = new Service;

        $item->name = $request->newName;
        $item->content = $request->newContent;
        $item->icons_id = $request->newIconSelected;
        $item->save();

        return redirect()->route('showService');
    }
    public function serviceEdit($id)
    {
        $service = Service::find($id);
        $iconsContent = Icon::orderBy('name')->get();
        return view('admin.serviceEdit', compact('service', 'iconsContent'));
    }
    public function serviceUpdate(TestimonialsRequest $request, $id)
    {
        $item = Service::find($id);
        $item->name = $request->newName;
        $item->content = $request->newContent;
        $item->icons_id = $request->newIconSelected;
        $item->save();
        

        return redirect()->route('showService');
    }
    public function serviceDelete(TestimonialsRequest $request, $id)
    {
        $item = Testimonial::find($id);
        $imageItem = TestimonialImage::find($item->testimonial_images_id);

        $item->delete();
        $imageItem->delete();

        return redirect()->route('showService');
    }




    public function inv2Show()
    {
        $text = Text::where('uses', '1f')->get()[0];
        return view('admin.inv2', compact('text'));
    }
    public function inv2Edit($id)
    {
        $text = Text::find($id);
        return view('admin.inv2Edit', compact('text'));
    }
    public function inv2Update(TestimonialsRequest $request, $id)
    {
        $item = Text::find($id);
        $item->content_p1 = $request->new1fp1;
        $item->content_p2 = $request->new1fp2;

        $item->save();

        return redirect()->route('showInv2');
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
    public function store(TestimonialsRequest $request)
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
    public function update(TestimonialsRequest $request, $id)
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
