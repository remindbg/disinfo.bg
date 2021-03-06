@extends('layouts.front')

@section('meta')
    <title>Случаи на Дезинформация и Фалшиви Новини| Desinfo.Info</title>
    <meta name="title" content="Desinfo.Info - Случаи на Дезинформация в българските медии">
    <meta name="description" content="Секция Новини, Статии и Анализи - desinfo.info - бъдете информирани">
    <meta property="og:url"         content="{{url()->current()}}" />
    <meta property="og:type"        content="website"/>
    <meta property="og:title"       content="Desinfo.Info - Случаи на Дезинформация в българските медии." />
    <meta property="og:description" content="Desinfo.Info - Случаи на Дезинформация в българските медии. Статии,
    Новини, Анализи, Медии в България">
    <meta property="og:image" content="{{asset('/images/static/homepage.jpg')}}">
@endsection
@section('title','Статии и Анализи')
@section('content')
    <div class="col-lg-8">
        @foreach($articles as $article)

            <div></div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="/articles/{{$article->created_at->
                            format('ymd')}}/{{$article->id}}/{{$article->slug}}">{{$article->title}}</a></h4>
                    <p class="text-left small font-weight-italic">
                        {{$article->created_at->diffForHumans()}}
                        | на {{$article->created_at->format('d')}} {{$article->bgmonth}}
                        {{$article->created_at->format('Y')}}г.
                        <div class="m-t-20 row">
                            <div class="col-md-3 col-xs-12"><img src="{{$article->imageurl}}" alt="Статия Изображение" class="img-responsive
                        radius"/></div>
                            <div class="col-md-9 col-xs-12">
                    <p>{{str_limit(strip_tags($article->body), 200)}}</p>
                    <hr>
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
    </div>
    @endforeach
    {{$articles->links("pagination::bootstrap-4")}}
    </div>

@endsection

