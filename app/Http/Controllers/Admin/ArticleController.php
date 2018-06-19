<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Categories;
use App\Tag;

class ArticleController extends Controller
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
    public function index()
    {
        $articles = Article::with('categories')
            ->orderBy('created_at', 'desc')
            ->paginate(8);



        return view('admin.articles.all',['articles' => $articles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cats = Categories::all();
        return view('admin.articles.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();

        $data = $this->validate($request, [
            'title' => 'required',
            'imageurl' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'selectCat' => 'required'
            //  'category_id' => 'required',
        ]);

        $article->title = $data['title'];
        $article->slug = $data['slug'];
        $article->imageurl = $data['imageurl'];
        $article->body = $data['body'];
        //$article->category_id = 1;

        $tags = $request['tags'];
        $tags = explode(',', $tags);
        $tagIds = [];
        foreach ($tags as $tagName) {
            //$post->tags()->create(['name'=>$tagName]);
            //Or to take care of avoiding duplication of Tag
            //you could substitute the above line as
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            if ($tag) {
                $tagIds[] = $tag->id;
            }
        }
        if($request['articleType'] == 1) {
            $article->articleType = 1;
        }
        else {
            $article->articleType = 2;
        }
        if($request['articleType'] == 1) {
            $article->summary_desinfo = $request['summary_desinfo'];
            $article->desinfo_date = $request['desinfo_date'];
            $article->affected_country = $request['affected_country'];
            $article->desinfo_started = $request['desinfo_started'];
            $article->desinfo_conclusion = $request['desinfo_conclusion'];
        }

        $article->save();
        $article->tags()->sync($tagIds);

        $article->categories()->attach($data['selectCat']);
        $article->isActive = false;
        return redirect('/admin/articles')
            ->with('success', 'Успешно');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allcategories = Categories::with('articles')->get();
        $article = Article::with('categories')->findOrFail($id);
       // dd($article->categories());

        return view('admin.articles.edit',compact
        ('article','allcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
       // dd($request['date']);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->imageurl = $request->imageurl;
        $article->slug = $request->slug;
        $article->categories()->sync($request->selectCat);
        $request['date'] =
        $article->created_at =
            \Carbon\Carbon::createFromFormat
            ('Y г.  m месец и d ден в  Hч.  m минути и s секунди',
                $request['date']);
        $article->isActive = $request->has('isActive');
        $tags = $request['tags'];
        $tags = explode(',', $tags);
        $tagIds = [];
        foreach ($tags as $tagName) {
            //$post->tags()->create(['name'=>$tagName]);
            //Or to take care of avoiding duplication of Tag
            //you could substitute the above line as
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            if ($tag) {
                $tagIds[] = $tag->id;
            }
        }
        $article->tags()->sync($tagIds);

        $article->save();
        $data['id'] = $id;

        return redirect('/admin/articles/')->with('message', 'Успешно');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->categories()->detach();
        $article->delete();

        return redirect()->route('allAdminArticles')->with('message', 'Успешно Изтрита Статия');

    }
}
