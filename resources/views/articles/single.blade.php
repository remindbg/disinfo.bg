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
    <meta property="og:image" content="{{$article->imageurl}}">
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
                        @if($article->articleType == 1)
                        <div class="card card-inverse" style="background-color: #333; border-color: #333;">
                            <div class="card-body">
                                <h5 class="card-title"><i class="ti-info-alt"></i> Обобщение на Дезинформацията</h5>
                                <p class="card-text">
                                    {{$article->summary_desinfo}}
                                </p>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="ti-check"></i> Заключение</h5>
                                <p class="card-text "><h3 class="text-center">{{$article->desinfo_conclusion}}</h3></p>
                                <hr>
                                <p class="small text-center">Допълнителна Информация</p>
                                <p class="small">Свързани Източници / Медии : {{$article->sources->count()}} <a href="#sources">към източниците</a> </p>
                                <p class="small">Дата на дезинформацията: {{$article->desinfo_date}}</p>
                                <p class="small">Засегнати Страни: {{$article->affected_country}}</p>
                                <p class="small">Източник на дезинформацията: {{$article->desinfo_started}}</p>
                                <p class="small muted">Семантичен Анализ на дезинформацията: Очаквайте скоро!</p>


                            </div>
                        </div>

                        <h2 class="font-weight-bold">{{$article->title}}</h2>
                        @endif
                        <div class="">
                            <img src="{{$article->imageurl}}" alt="Статия Изображение"
                                 class="article-featured-image float-left"
                            />
                        </div>

                        <div class="article-text">

                            {!!$article->body!!}
                        </div>
                            <hr>
                        Етикети:
                            @foreach($article->tags as $tag)
                                <a href="#">{{$tag->name}}</a>,
                            @endforeach
                    </div>
                </div>
                    @if($article->articleType == 1)

                    <div id="#sources" class="text-center">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">Номер</th>
                                <th>Име</th>
                                <th class="text-center">Дата</th>
                                <th class="text-center">Адрес</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($article->sources as $source)
                                <tr>
                                    <td class="text-center">{{$source->id}}</td>
                                    <td>{{$source->name}}</td>
                                    <td class="text-right">{{$source->created_at->diffForHumans()}}</td>
                                    <td class="text-right">
                                        <a href="{{$source->url}}" target="_blank" rel="nofollow"><button type="button" class="btn btn-block btn-outline-danger">Посещаване</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                    @endif

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
                <hr>
                <h6 class="card-subtitle">Очаквайте Скоро</h6> </div>

        </div>
    </div>





@endsection

