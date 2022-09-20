<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function list()
    {
        $images = Storage::files('rates');

        return view('panel.rate.list',  ['images' => $images]);
    }

    public function deleteDo(Request $request)
    {
        $this->validate($request, [
            'path' => 'required',
        ]);

        Storage::delete($request->path);
    }

    public function createDo(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $imageName = uniqid() . '.webp';

                Image::make($image->getRealPath())
                    ->resize(500, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->encode('webp', 60)
                    ->save(storage_path('app/public/rates/' . $imageName));
            }
        }
    }
}
