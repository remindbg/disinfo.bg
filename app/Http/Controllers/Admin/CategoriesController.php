<?php

namespace App\Http\Controllers\Admin;
use App\Article;
use App\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::with('articles')->get();

        return View('admin.articleCategories.all',
            compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.articleCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
           'name' => 'required',
           'slug' => 'required',

        ));
        $categories = new Categories();
        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->metaimage = $request->metaimage;
        $categories->metadescr = $request->metadescr;
        $categories->save();
        return redirect('/admin/articles/categories')
            ->with('success','Успешно Създаване на категорията');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        // i dont need it
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories, $id)
    {
        $category = Categories::findOrFail($id);
        return view('admin.articleCategories.edit',
            compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Categories::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->metadescr = $request->description;
        $category->metaimage = $request->imageurl;
        $category->save();
        return redirect('/admin/articles/categories')->with('message', 'Успешно Редактиране');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categories::find($id);
       

        $category->delete();

        return redirect('/admin/articles/categories/')->with('message', 'Успешно Изтрита Категория');
    }
}
