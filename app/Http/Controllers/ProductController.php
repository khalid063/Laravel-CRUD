<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public  function index(){
        $products = Product::all();  // "Product" it is the Model name for connect to the database
        return view('product', ['products' => $products]);
    }

    public  function create(){
        return view('create');
    }

    public function store(Request $request){
        //dd($request->name);			//*** for check the data inot fontend
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'discription' => 'nullable'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index')); // here we have to put ->name('product.index'); this route name.

    }

    public function edit(Product $product){
        //dd($product->name);			//*** for check the data inot fontend
        return view('edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'discription' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Update Successfully');

    }


}
