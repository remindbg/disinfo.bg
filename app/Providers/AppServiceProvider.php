<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
use App\Category;
use App\Article;
use Carbon;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale('BG');
        Schema::defaultStringLength(191);
        View::composer('_partials.defSidebar', function($view){
           $articles = Article::orderBy('created_at','desc')->take(9)->get();
            $categories = Category::all();
            $view->with(compact('articles','categories')) ;
        }) ;
        View::composer('*', function($view)
        {
            $view->with('headercats', Category::all());
        });
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
