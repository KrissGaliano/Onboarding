<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;



class CategoryController extends Controller
{
    /** 
    *@return \Illuminate\Http\Response
    */
    public function index()
    {


        $categories = Category::all();

        return view('admin.categories.index',compact('categories'));
    }


     /** 
    *@return \Illuminate\Http\Response
    */
    public function create()
    {

        return view('admin.categories.create');
    }

     /** 
      *@param \Iluminate\Http\Request $request 
      *@return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required|unique:categories'
      ]);

      $category = Category::create($request->all());

      return redirect()->route('admin.categories.edit', $category)->with('info','La categoría se creó con éxito');

    }


  
    /** 
      *@param int $id
      *@return \Illuminate\Http\Response
    */
    public function show($id)
    {

        return view('admin.categories.show',compact('category'));
    }

    /** 
      *@param int $id
      *@return \Illuminate\Http\Response
    */
    public function edit(Category $category)
    {

        return view('admin.categories.edit',compact('category'));

    }


    /** 
      *@param \Iluminate\Http\Request $request
      *@param int $id
      *@return \Illuminate\Http\Response
    */
    public function update(Request $request,Category $category)
    {

      $request->validate([
        'name' => 'required|unique:categories,name,'. $category->id
      ]);

      $category->update($request->all());

      return redirect()->route('admin.categories.edit', $category)->with('info','La categoría se actualizó con éxito');

    }


     /** 
      *@param int $id
      *@return \Illuminate\Http\Response
    */
    public function destroy(Category $category)
    {
      $category->delete();

      return redirect()->route('admin.categories.index')->with('info','La categoría se eliminó con éxito');

    }

}
