<?php

namespace App\Providers;
use App\Categories;
use View;
use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;
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
           $articles = Article::orderBy('created_at','desc')->where('isActive',true)->take(9)->get();
            //$categories = Category::all();
            $allcats = Categories::with('articles')->get();
            $view->with(compact('articles','allcats')) ;
        }) ;
        View::composer('*', function($view)
        {
           $view->with('allcats', Categories::all());
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
