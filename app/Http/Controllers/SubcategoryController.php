<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Session;

class SubcategoryController extends Controller
{
    public function manageSubCategory(){
        $data = SubCategory::with('category')->get();
        return view('admin.category.manage-sub-category', compact('data'));
    }

    public function addCategory(){
        $categories = Category::where('status', 1)
            ->orderBy('category','ASC')
            ->get();

        return view('admin.category.add-sub-category', compact('categories'));
    }

    public function saveCategory(Request $request){
        $request->validate([
            'sub_cat' => 'required',
        ]);

        $category = new SubCategory();
        $category->cat_id = $request->cat_id;
        $category->sub_cat = $request->sub_cat;
        $category->save();

        Session::flash('success','Category save success!');

        return back();
    }
}
