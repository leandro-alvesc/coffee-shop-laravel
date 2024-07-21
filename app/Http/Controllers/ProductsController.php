<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductsController extends Controller
{
    public function index() {
        return Products::get();
    }

    public function show($id) {
        return Products::where('_id', '=', $id)->get();
    }

    public function store(Request $request) {
        $data = $request->all();
        $product = new Products();
        $product->fill($data);
        $product->save();
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $product = Products::where('_id', '=', $id)->first();
        $product->fill($data)->save();
        return $product;
    }

    public function destroy($id) {
        Products::where('_id', '=', $id)->first()->delete();
    }
}
