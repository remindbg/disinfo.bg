<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use App\Category;
use App\Article;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('_partials.defSidebar', function($view){
           $articles = Article::orderBy('created_at','desc')->take(9)->get();
            $categories = Category::all();
            $view->with(compact('articles','categories')) ;
        }) ;
            // Get the $data

          //  $view->with('data', $data);

        //});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
