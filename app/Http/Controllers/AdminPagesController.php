<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productImage;

use Image;


class AdminPagesController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function product_create(){
        return view('admin.product.create');
    }  

    public function formbasic(){
        return view('admin.formbasic');
    }
    public function formadvanced(){
        return view('admin.formadvanced');
    }
    public function charts(){
        return view('admin.charts');
    }
    public function manage_products(){
        $products = product::orderBy('id', 'desc')->get();
        return view('admin.product.index')->with('products', $products);
    }
    
    public function product_edit($para){
        $product = product::find($para);
        return view('admin.product.edit')->with('product', $product);
    }



    public function product_store(Request $request){
         


        $request->validate([
            'title'    => 'required|max:150',
            
            
        ]);


         $product = new product();
         $product->title = $request->title;
         $product->description = $request->description;
         $product->price = $request->price;
         $product->quantity = $request->quantity;

         $product->slug = str_slug($product->title);
         $product->category_id=1;
         $product->brand_id=1;
         $product->admin_id=1;
         $product->save();

        //  ProductImage Model Insert Image

       

        if (count($request->product_image) > 0){
              foreach($request->product_image as $image){
                
                    //insert image
                    // $image = $request->file('product_image');
                    $img = time() . '.'.  $image->getClientOriginalExtension();
                    $location = public_path('img/' .$img);
                    Image::make($image)->save($location);
        
                    $product_image = new productImage;
                    $product_image->product_id =$product->id;
                    $product_image->image =$img;
                    $product_image->save();
        
                }
              }
        
         
         return redirect()->route('admin.product.create');
    }
  

    public function product_update(Request $request, $para){
         


        $request->validate([
            'title'    => 'required|max:150',
            
            
        ]);


         $product =  product::find($para);
         $product->title = $request->title;
         $product->description = $request->description;
         $product->price = $request->price;
         $product->quantity = $request->quantity;

         $product->save();

        
         return redirect()->route('admin.products');
            }
  
}
