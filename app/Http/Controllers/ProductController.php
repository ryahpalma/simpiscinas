<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function list()
    {
        $products = Product::get();
        return view('panel.product.list', ['products' => $products]);
    }

    public function edit($id)
    {
        $product = Product::whereId($id)->get()->first();

        return view('panel.product.edit', ['product' => $product]);
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
                    ->save(storage_path('app/public/products/' . $newImageName));
            }

            foreach (explode(",", $request->oldImagesName) as $image) {
                if (Storage::exists('products/' . $image)) {
                    Storage::delete('products/' . $image);
                }
            }
        }

        Product::whereId($request->id)->update([
            'title' => $request->title,
            'description' => nl2br($request->description),
            'images' => $request->hasFile('images') ? implode(",", $newImagesName) : $request->oldImagesName,
        ]);

        return redirect()->route('product.list');
    }

    public function deleteDo($id)
    {
        $product = Product::whereId($id)->get()->first();
        $images = explode(",", $product->images);

        foreach ($images as $image) {
            if (Storage::exists('products/' . $image)) {
                Storage::delete('products/' . $image);
            }
        }

        Product::destroy($id);

        return redirect()->route('product.list');
    }

    public function create()
    {
        return view('panel.product.create');
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
                ->save(storage_path('app/public/products/' . $imageName));
        }

        Product::create([
            'title' => $request->title,
            'description' => nl2br($request->description),
            'images' => implode(",", $imagesName),
        ]);

        return redirect()->route('product.list');
    }
}
