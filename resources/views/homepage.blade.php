@extends('layouts.front')

@section('meta')
    <title>Статии, Новини, Анализи | Desinfo.Info</title>
    <meta name="title" content="Статии, Новини, Анализи | Desinfo.Info">
    <meta name="description" content="Секция Новини, Статии и Анализи - desinfo.info - бъдете информирани">
    <meta property="og:url"         content="{{url()->current()}}" />
    <meta property="og:type"        content="website"/>
    <meta property="og:title"       content="Desinfo.Info - Случаи на Дезинформация в българските медии." />
    <meta property="og:description" content="Desinfo.Info - Случаи на Дезинформация в българските медии. Статии,
    Новини, Анализи, Медии в България">
    <meta property="og:image"       content="{{asset('/images/static/homepage.jpg')}}" />
@endsection
@section('title','Последни Статии')
@section('content')
    <div class="col-lg-8">
        @foreach($articles as $article)
            <div class="ribbon-wrapper card">
                <div class="ribbon ribbon-bookmark  ribbon-warning">{{$article->created_at}}</div>
                <a href="/articles/{{$article->category->slug}}/{{$article->id}}/{{$article->slug}}"><h3
                            class="font-weight-bold">{{$article->title}}</h3></a>
                <div class  ="ml-auto">
                    <ul class="list-inline">
                        <small>Категория:</small>
                        <li>
                            <h6 class="text-muted  text-info">
                                <i class="fa fa-circle font-10 m-r-10"></i><a
                                        href="/articles/{{$article->category->slug}}">
                                    {{$article->category->name}}
                                </a>
                            </h6>
                        </li>
                    </ul>
                </div>
                <div class="m-t-20 row">
                    <div class="col-md-3 col-xs-12"><img src="{{$article->imageurl}}" alt="Статия Изображение"
                                                         class="img-responsive
                        radius"
                        /></div>
                    <div class="col-md-9 col-xs-12">
                        <p>{{ str_limit(strip_tags($article->body), 255)}}</p>
                        <hr>
                        <a href="/articles/{{$article->category->slug}}/{{$article->id}}/{{$article->slug}}"
                           class="btn
                            btn-success"> Повече..
                            .</a></div>
                </div>
                <div class="col-lg-12">
                    <div class="like-comm">
                       {{-- <a href="javascript:void(0)" class="link m-r-10">2 Коментара</a> --}}
                        <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                                text-primary"></i> {{$article->views}}</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{$articles->links("pagination::bootstrap-4")}}

    </div>
@endsection

