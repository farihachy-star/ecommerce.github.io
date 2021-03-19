<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productImage;

use Image;


class AdminProductController extends Controller
{
    public function index(){
        $products = product::orderBy('id', 'desc')->get();
        return view('admin.product.index')->with('products', $products);
    }
    public function create(){
        return view('admin.product.create');
    }  
 
    public function edit($para){
        $product = product::find($para);
        return view('admin.product.edit')->with('product', $product);
    }



    public function store(Request $request){
         


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
  

    public function update(Request $request, $para){
         


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


        public function delete($para){
            $product = product::find($para);
            if(!is_null($product)){
                $product->delete();
            }

            session()->flash('success', 'Product has deleted successfully !!');
            return back();
        }    
  
}
