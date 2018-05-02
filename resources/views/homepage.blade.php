@extends('layouts.front')

@section('meta')
    <title>Статии, Новини, Анализи | Desinfo.Info</title>
    <meta name="title" content="Desinfo.Info - Случаи на Дезинформация в българските медии">
    <meta name="description" content="Секция Новини, Статии и Анализи - desinfo.info - бъдете информирани">
    <meta property="og:url"         content="{{url()->current()}}" />
    <meta property="og:type"        content="website"/>
    <meta property="og:title"       content="Desinfo.Info - Случаи на Дезинформация в българските медии." />
    <meta property="og:description" content="Desinfo.Info - Случаи на Дезинформация в българските медии. Статии,
    Новини, Анализи, Медии в България">
    <meta property="og:image" content="{{asset('/images/static/homepage.jpg')}}">
@endsection
@section('title','Последно')
@section('content')
    <div class="col-lg-8">
        @foreach($articles as $article)

        <div></div>
            <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="/articles/{{$article->category->slug}}/{{$article->id}}/{{$article->slug}}">
                                {{$article->title}}</h4></a>

                            <p class="text-left small font-weight-italic">
                            {{$article->created_at->diffForHumans()}}
                            | на {{$article->created_at->format('d')}} {{$article->bgmonth}}
                            {{$article->created_at->format('Y')}}г.
                            <div class="m-t-20 row">
                                <div class="col-md-3 col-xs-12"><img src="{{$article->imageurl}}" alt="Статия Изображение" class="img-responsive
                        radius"/></div>
                                <div class="col-md-9 col-xs-12">
                        <p>{{str_limit(strip_tags($article->body), 150)}}</p>
                        <hr>
                        <a href="/articles/{{$article->category->slug}}/{{$article->id}}/{{$article->slug}}"
                           class="btn
                            btn-success"> Повече..
                            .</a></div>
                </div>
                        </p>
            <div class="col-lg-12">
                <div class="like-comm">
                    {{-- <a href="javascript:void(0)" class="link m-r-10">2 Коментара</a> --}}
                    <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                                text-themecolor"></i> {{$article->views}}</a>
                    <a href="/articles/{{$article->category->slug}}"><i class="fa fa-tag
                                text-themecolor"></i> {{$article->category->name}}</a>
                </div>
            </div>
                    </div>
                </div>


        @endforeach
        {{$articles->links("pagination::bootstrap-4")}}

    </div>
@endsection

