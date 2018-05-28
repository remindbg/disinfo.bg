<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Article;
use function foo\func;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories, $id, $slug)
    {
       $category = Categories::find($id);
       $cats = Categories::find($id);
       $articles = $cats->articles()->active()->get();




       return view('artCategories.all',compact('articles','category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */

}
