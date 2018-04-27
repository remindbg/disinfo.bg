@extends('layouts.front')

@section('title', 'Статии, Новини и Анализи')
@section('meta')
    <title>{{$article->title}} | Desinfo.Info</title>
    <meta name="title" content="{{$article->title}}">
    <meta name="description" content="{{$article->title}} - desinfo.Info - Бъдете информирани">
    <meta property="og:url"         content="{{url()->current()}}" />
    <meta property="og:type"        content="website"/>
    <meta property="og:title"       content="{{$article->title}}" />
    <meta property="og:description" content="{{$article->title}}- desinfo.Info - Бъдете информирани ">
    <meta property="og:image" content="{{asset('/images/static/homepage.jpg')}}">
@endsection
@section('content')
    <div class="col-lg-8">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark  ribbon-warning">21.03.2017</div>
            <h3 class="font-weight-bold">{{$article->title}}</h3>
                <hr>
                <div class="m-t-20 row">
                    <div class="col-md-12 col-xs-12">
                        <img src="{{$article->imageurl}}" alt="Статия Изображение"
                             class="article-featured-image float-left"
                        />
                        <div class="article-text">{!!$article->body!!}</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <hr>
                    <div class="like-comm">

                        <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                        text-primary"></i> {{$article->views}}</a>
                        <a href="/articles/{{$article->category->slug}}">{{$article->category->name}}</a>
                    </div>
                </div>
            </div>

        <div class="card" id="comments">
            <div class="card-body">
                <h4 class="card-title">Коментари</h4>
                <h6 class="card-subtitle">Очаквайте Скоро</h6> </div>

        </div>
    </div>





@endsection

