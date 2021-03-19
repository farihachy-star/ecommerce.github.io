<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ecoController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }
    
    public function products(){
        $products = product::orderBy('id', 'desc')->get();
        return view('Frontend.Products.index')->with('products', $products);
    }
    
    public function show($slug){
        $product = Product::where('slug',$slug)-> first();
        if(!is_null($product)){
           return view('Frontend.Products.show', compact('product'));
        }else{
            session()->flash('errors', 'Sorry !! There is no product by this URL..');
            return redirect()->route('products');
        }
    }
    public function search(Request $request){
        $search = $request->search;
        $products = product::orWhere('title', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->orWhere('slug', 'like', '%'.$search.'%')
        ->orWhere('price', 'like', '%'.$search.'%')
        ->orWhere('quantity', 'like', '%'.$search.'%')
        ->orderBy('id','desc')
        ->paginate(9);
        return view('Frontend.Products.search', compact('search','products'));
    }
}
