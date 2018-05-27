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
    <meta property="og:image" content="{{$article->imageurl}}')}}">
@endsection
@section('content')
    <div class="col-lg-8">
        <div class="ribbon-wrapper card">
            <h2 class="font-weight-bold">{{$article->title}}</h2>
            <p class="text-left small font-weight-italic">
                {{$article->created_at->diffForHumans()}}
                | на {{$article->created_at->format('d')}} {{$article->bgmonth}}
                {{$article->created_at->format('Y')}}г. </p>
            <div class="like-comm small">
                {{-- <a href="javascript:void(0)" class="link m-r-10">2 Коментара</a> --}}
                <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                                text-themecolor"></i> {{$article->views}}</a>
                <i class="fa fa-folder-open-o
                                text-themecolor"></i>
                @foreach($article->categories as $category)
                    <a href="/articles/{{$category->id}}/{{$category->slug}}">{{$category->name}}</a>,
                @endforeach
            </div>
                <hr>
                <div class="m-t-20 row">
                    <div class="col-md-12 col-xs-12">
                        <img src="{{$article->imageurl}}" alt="Статия Изображение"
                             class="article-featured-image float-left"
                        />
                        <div class="article-text">{!!$article->body!!}</div>
                    </div>
                </div>
             </p>
            <div class="col-lg-12">
                <div class="like-comm small">
                    {{-- <a href="javascript:void(0)" class="link m-r-10">2 Коментара</a> --}}
                    <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                                text-themecolor"></i> {{$article->views}}</a>
                    <i class="fa fa-folder-open-o
                                text-themecolor"></i>
                    @foreach($article->categories as $category)
                        <a href="/articles/{{$category->id}}/{{$category->slug}}">{{$category->name}}</a>,
                    @endforeach
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

