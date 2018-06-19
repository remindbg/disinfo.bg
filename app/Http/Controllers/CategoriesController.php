<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Article;
use Illuminate\Http\Request;
use function PHPSTORM_META\type;

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
       $category = Categories::find($id)->with('articles','articles.tags','articles.sources')->first();
        $articles = $category->articles->sortBy(function($query)
        {
            return $query->created_at;
        })->reverse();






       return view('artCategories.all',compact('category','articles'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */

}
