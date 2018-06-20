<?php

namespace App\Http\Controllers\Admin;
use App\Article;
use App\Categories;
use App\Source;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SourceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) // need article ID

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
    public function create($id)
    {
        $article = Article::find($id);
        return View('admin.sources.create',compact('article'));
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
            'url' => 'required',
            'article_id' => 'required'

        ));
        $source = new Source();
        $source->name = $request->name;
        $source->url = $request->url;
        $source->article_id = $request->article_id;
        $source->save();
        return redirect('/admin/articles/')
            ->with('success','Успешно Добавяне На Източник');
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
