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
        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '.webp';

            Image::make($request->image->getRealPath())
                ->fit(620, 460)
                ->encode('webp', 80)
                ->save(storage_path('app/public/pools/' . $newImageName));

            Storage::delete('pools/' . $request->oldImageName);
        }

        Pool::whereId($request->id)->update([
            'title' => $request->title,
            'line' => $request->line,
            'description' => $request->description,
            'measurement' => $request->measurement,
            'measurement_price' => $request->measurement_price,
            'model' => $request->model,
            'image' => ($request->hasFile('image') ? $newImageName : $request->oldImageName),
        ]);


        return redirect()->route('pool.list');
    }

    public function deleteDo($id)
    {
        $pool = Pool::whereId($id)->get()->first();

        if (Storage::exists('pools/' . $pool->image)) {
            Storage::delete('pools/' . $pool->image);
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
        $imageName = uniqid() . '.webp';

        Image::make($request->image->getRealPath())
            ->fit(620, 460)
            ->encode('webp', 80)
            ->save(storage_path('app/public/pools/' . $imageName));

        Pool::create([
            'title' => $request->title,
            'line' => $request->line,
            'description' => $request->description,
            'measurement' => $request->measurement,
            'measurement_price' => $request->measurement_price,
            'image' => $imageName,
            'model' => $request->model,
        ]);

        return redirect()->route('pool.list');
    }
}
