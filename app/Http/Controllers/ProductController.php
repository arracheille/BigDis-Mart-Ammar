<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric|min:0',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('product_photos'), $imageName);
            $product->image = 'product_photos/' . $imageName;
        }

        $product->save();

        return back();
    }
}
