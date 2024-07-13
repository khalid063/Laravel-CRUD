<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public  function index(){
        return view('product');
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


}
