<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{

public function index()
    {
        $products = Product::all(); 
       
        return response()->json($products);
    }

public function store(Request $request)
    {
        Product::create([
            'name'        => $request->name,
            'price'       => $request->price,
            'description' => $request->description,
        ]);

        // 3. إرجاع رسالة النجاح
        return response()->json([
            'message' => 'تمت إضافة المنتج بنجاح'
        ]);
    }


// public function edit($id)
// {
//  $product = Product::find($id);
//  return response()->json(['product' => $product]);
// }
public function edit(Request $request, $id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json([
            'message' => 'المنتج غير موجود'
        ], 404);
    }

    $product->update([
        'name'        => $request->name,
        'price'       => $request->price,
        'description' => $request->description,
    ]);

    // 3. إرجاع رسالة نجاح مع البيانات المحدثة
    return response()->json([
        'message' => 'تم تعديل المنتج بنجاح',
        'product' => $product
    ]);
}
}

