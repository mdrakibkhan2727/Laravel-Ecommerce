<?php

namespace App\Http\Controllers;
use App\Category;
use Session;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function manageCategory(){
    	$data = Category::orderBy('id','DESC')
                        ->get();

    	return view('admin.category.manage-category', compact('data'));
    }

    public function addCategory(){
    	return view('admin.category.add-category');
    }

    public function saveCategory(Request $request){

        $request->validate([
            'category' => 'required',
        ]);

        $category = new Category();
        $category->category = $request->category;
        $category->category_slug = $this->slug_generator($request->category_slug);
        $category->save();

        Session::flash('success','Category save success!');

        return back();
    }

    public function categoryStatus($id, $status){
        $c = Category::find($id);
        $c->status = $status;
        $c->save();
        return response()->json(['message' => 'Success']);
    }

    public function delete($id){
        $c = Category::find($id);
        $c->delete();
        Session::flash('success','Category delete success!');
        return back();
    }



    public function slug_generator($string) {
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

        return strtolower(preg_replace('/-+/', '-', $string));
    }

}
