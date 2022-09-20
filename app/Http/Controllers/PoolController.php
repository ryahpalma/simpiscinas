<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Pool;

class PoolController extends Controller
{
    public function list()
    {
        $pools = Pool::get();
        return view('panel.pool.list', ['pools' => $pools]);
    }

    public function edit($id)
    {
        $pool = Pool::whereId($id)->get()->first();

        return view('panel.pool.edit', ['pool' => $pool]);
    }

    public function editDo(Request $request)
    {
        if ($request->hasFile('images')) {
            $newImagesName = array();

            foreach ($request->images as $image) {
                $newImageName = uniqid() . '.webp';
                $newImagesName[] = $newImageName;

                Image::make($image->getRealPath())
                    ->fit(799, 800)
                    ->encode('webp', 70)
                    ->save(storage_path('app/public/pools/' . $newImageName));
            }

            foreach (explode(",", $request->oldImagesName) as $image) {
                if (Storage::exists('pools/' . $image)) {
                    Storage::delete('pools/' . $image);
                }
            }
        }

        Pool::whereId($request->id)->update([
            'title' => $request->title,
            'line' => $request->line,
            'description' => nl2br($request->description),
            'measurement' => $request->measurement,
            'measurement_price' => $request->measurement_price,
            'model' => $request->model,
            'images' => $request->hasFile('images') ? implode(",", $newImagesName) : $request->oldImagesName,
        ]);

        return redirect()->route('pool.list');
    }

    public function deleteDo($id)
    {
        $pool = Pool::whereId($id)->get()->first();
        $images = explode(",", $pool->images);

        foreach ($images as $image) {
            if (Storage::exists('pools/' . $image)) {
                Storage::delete('pools/' . $image);
            }
        }

        Pool::destroy($id);

        return redirect()->route('pool.list');
    }

    public function create()
    {
        return view('panel.pool.create');
    }

    public function createDo(Request $request)
    {
        $imagesName = array();

        foreach ($request->images as $image) {
            $imageName = uniqid() . '.webp';
            $imagesName[] = $imageName;

            Image::make($image->getRealPath())
                ->fit(799, 800)
                ->encode('webp', 70)
                ->save(storage_path('app/public/pools/' . $imageName));
        }

        Pool::create([
            'title' => $request->title,
            'line' => $request->line,
            'description' => nl2br($request->description),
            'measurement' => $request->measurement,
            'measurement_price' => $request->measurement_price,
            'model' => $request->model,
            'images' => implode(",", $imagesName),
        ]);

        return redirect()->route('pool.list');
    }
}
