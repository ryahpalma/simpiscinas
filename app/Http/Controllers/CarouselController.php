<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Pool;

class CarouselController extends Controller
{
    public function list()
    {
        $carousels = Carousel::get();
        $pools = Pool::get();

        return view('panel.carousel.list', ['carousels' => $carousels, 'pools' => $pools]);
    }

    public function edit($id)
    {
        $carousel = Carousel::whereId($id)->get()->first();
        $pools = Pool::get();

        return view('panel.carousel.edit', ['carousel' => $carousel, 'pools' => $pools]);
    }

    public function editDo(Request $request)
    {
        if ($request->hasFile('image_desktop')) {
            $newImageNameDesktop = uniqid() . '.webp';

            Image::make($request->image_desktop->getRealPath())
                ->fit(1500, 600)
                ->encode('webp', 50)
                ->save(storage_path('app/public/carousels/' . $newImageNameDesktop));

            Storage::delete('carousels/' . $request->oldImageName);
        }

        if ($request->hasFile('image_mobile')) {
            $newImageNameMobile = uniqid() . '.webp';

            Image::make($request->image_mobile->getRealPath())
                ->fit(750, 750)
                ->encode('webp', 50)
                ->save(storage_path('app/public/carousels/' . $newImageNameMobile));

            Storage::delete('carousels/' . $request->oldImageName);
        }

        if ($request->hasFile('image_mobile') || $request->hasFile('image_mobile')) {
            Carousel::whereId($request->id)->update([
                'title' => $request->title,
                'position' => $request->position,
                'pool_id' => $request->pool_id,
                'image_desktop' => ($request->hasFile('image_desktop') ? $newImageNameDesktop : $request->oldImageNameDesktop),
                'image_mobile' => ($request->hasFile('image_mobile') ? $newImageNameMobile : $request->oldImageNameMobile),
            ]);
        } elseif ($request->hasFile('image_desktop')) {
            Carousel::whereId($request->id)->update([
                'title' => $request->title,
                'position' => $request->position,
                'pool_id' => $request->pool_id,
                'image_mobile' => ($request->hasFile('image_mobile') ? $newImageNameMobile : $request->oldImageNameDesktop),
            ]);
        } elseif ($request->hasFile('image_mobile')) {
            Carousel::whereId($request->id)->update([
                'title' => $request->title,
                'position' => $request->position,
                'pool_id' => $request->pool_id,
                'image_mobile' => ($request->hasFile('image_mobile') ? $newImageNameMobile : $request->oldImageNameDesktop),
            ]);
        } else {
            Carousel::whereId($request->id)->update([
                'title' => $request->title,
                'position' => $request->position,
                'pool_id' => $request->pool_id
            ]);
        }

        return redirect()->route('carousel.list');
    }

    public function deleteDo($id)
    {
        $carousel = Carousel::whereId($id)->get()->first();

        if (Storage::exists('carousels/' . $carousel->image_desktop)) {
            Storage::delete('carousels/' . $carousel->image_desktop);
        }

        if (Storage::exists('carousels/' . $carousel->image_mobile)) {
            Storage::delete('carousels/' . $carousel->image_mobile);
        }

        Carousel::destroy($id);

        return redirect()->route('carousel.list');
    }

    public function create()
    {
        $pools = Pool::get();

        return view('panel.carousel.create', ['pools' => $pools]);
    }

    public function createDo(Request $request)
    {
        if ($request->hasFile('image_desktop')) {
            $imageNameDesktop = uniqid() . '.webp';

            Image::make($request->image_desktop->getRealPath())
                ->fit(1500, 600)
                ->encode('webp', 50)
                ->save(storage_path('app/public/carousels/' . $imageNameDesktop));
        }

        if ($request->hasFile('image_mobile')) {
            $imageNameMobile = uniqid() . '.webp';

            Image::make($request->image_mobile->getRealPath())
                ->fit(750, 750)
                ->encode('webp', 50)
                ->save(storage_path('app/public/carousels/' . $imageNameMobile));
        }

        Carousel::create([
            'title' => $request->title,
            'position' => $request->position,
            'pool_id' => $request->pool_id,
            'image_desktop' => $imageNameDesktop,
            'image_mobile' => $imageNameMobile,
        ]);

        return redirect()->route('carousel.list');
    }
}
