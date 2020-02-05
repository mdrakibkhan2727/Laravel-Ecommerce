<?php

Route::get('/', 'SiteController@index')->name('index');
Route::get('/product', 'SiteController@product')->name('product');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/brand/add-brand', 'BrandController@addBrand')->name('add-brand');
Route::post('/brand/save-brand', 'BrandController@saveBrand')->name('save-brand');
Route::get('/brand/manage-brand', 'BrandController@manageBrand')->name('manage-brand');
Route::get('/brand/delete/{id}', 'BrandController@delete')->name('delete-brand');
Route::get('/brand/edit/{id}', 'BrandController@edit')->name('edit-brand');
Route::post('/brand/update-brand', 'BrandController@updateBrand')->name('update-brand');
Route::get('/brand/brandStatus/{id}/{s}', 'BrandController@brandStatus')->name('brandStatus');

// Categories
Route::get('/category/manage-category', 'CategoryController@manageCategory')->name('manage-category');
Route::get('/category/add-category', 'CategoryController@addCategory')->name('add-category');
Route::post('/category/save-category', 'CategoryController@saveCategory')->name('save-category');
Route::get('/category/categoryStatus/{id}/{s}', 'CategoryController@categoryStatus')->name('categoryStatus');
Route::get('/category/delete/{id}', 'CategoryController@delete')->name('delete-category');


Route::get('/category/manage-sub-category', 'SubcategoryController@manageSubCategory')->name('manage-subcategory');
Route::get('/category/add-sub-category', 'SubcategoryController@addCategory')->name('add-sub-category');
Route::post('/category/save-subcategory', 'SubcategoryController@saveCategory')->name('save-subcategory');

Route::get('/category/manage-sub-sub-category', 'SubsubcategoryController@manageSubsubCategory')->name('manage-subsubcategory');
