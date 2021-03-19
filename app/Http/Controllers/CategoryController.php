<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use File;

class CategoryController extends Controller
{
   public function index()
   {
       $categories = Category::orderBy('id','desc')->get();
       return view('admin.categories.index',compact('categories'));
   }
   public function create()
   {
       $main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
       return view('admin.categories.create',compact('main_categories'));
   }
   public function store(Request $request)
   
   {

     $this->validate($request, [
      'name' => 'required',
      'image' =>'nullable|image',
    ],

   [
       'name.required' => 'Please provide a category name',
       'image.image' => 'Please provide a valid image with .jpg .png .gif .jpeg extension..',
   ]);

   $category = new Category();
   $category->name = $request->name;
   $category->description = $request->description;
   $category->parent_id = $request->parent_id;
   
   
   

   if (is_countable($request->image) && count($request->image) > 0){
          $image = $request->file('image');
          $img = time() . '.'.  $image->getClientOriginalExtension();
          $location = public_path('img/' .$img);
          Image::make($image)->save($location);
          $category->image = $img;
         
      
       }

   $category->save();
   
   
   session()->flash('Success', 'A new category has added successfully !!');
   return redirect()->route('admin.categories');  
  }

   public function edit($para){
    $main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
    $category = Category::find($para);
    if(!is_null($category)){
       return view('admin.categories.edit',compact('category','main_categories'));
    }
    else{
        return redirect()->route('admin.categories');
    }
}
 

public function update(Request $request, $para)
{
  $this->validate($request, [
   'name' => 'required',
   'image' =>'nullable|image',
 ],

[
    'name.required' => 'Please provide a category name',
    'image.image' => 'Please provide a valid image with .jpg .png .gif .jpeg extension..',
]);

$category =  Category::find($para);
$category->name = $request->name;
$category->description = $request->description;
$category->parent_id = $request->parent_id;

//insert images

// //    if (count($request->image) > 0){
 if (is_countable($request->image) && count($request->image) > 0) {
     if(File::exists('img/' .$category->image)){
         File::delete('img/' .$category->image);
     }
       //insert image
       $image = $request->file('image');
       $img = time() . '.'.  $image->getClientOriginalExtension();
       $location = public_path('img/' .$img);
       Image::make($image)->save($location);
       $category->image = $img;
      
   
   }

$category->save();


session()->flash('Success', ' Category has updated successfully !!');
return redirect()->route('admin.categories');



 }

 public function delete($para){
    $category = Category::find($para);
    if(!is_null($category)){
        // delete sub category
          if($category->parent_id == NULL){
            //   delete sub category
            $sub_categories = Category::orderBy('name','desc')->where('parent_id',$category->id)->get();
            foreach($sub_categories as $sub){
                     // delete sub image
            if(File::exists('img/' .$sub->image)){
            File::delete('img/' .$sub->image);
        }
                $sub->delete();
            }
          }

        // delete category image
        if(File::exists('img/' .$category->image)){
            File::delete('img/' .$category->image);
        }
        $category->delete();
    }

    session()->flash('success', 'category has deleted successfully !!');
    return back();
}    

}
