<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function show($id): ProductResource
    {
        $product = Product::with('productCategory', 'productImages')->findOrFail($id);
        return new ProductResource($product);
    }
}
