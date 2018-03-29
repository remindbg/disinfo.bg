@extends('layouts.front')

@section('title', 'Homepage')

@section('content')
    <div class="col-lg-8">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark  ribbon-warning">21.03.2017</div>
            <h3 class="font-weight-bold">{{$article->title}}</h3>

            <div class="ml-auto">
                <ul class="list-inline">
                    <small>Категория:</small>
                    <li>
                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>
                            <a href="/articles/{{$article->category->slug}}">{{$article->category->name}}</a>
                        </h6>
                    </li>
                </ul>
            </div>

                <hr>
                <div class="m-t-20 row">
                    <div class="col-md-3 col-xs-12"><img src="{{$article->imageurl}}" alt="Статия Изображение"
                                                         class="img-responsive
                        radius"
                        /></div>
                    <div class="col-md-9 col-xs-12">
                        <p>{!!$article->body!!}</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <hr>
                    <div class="like-comm">
                        <a href="javascript:void(0)" class="link m-r-10">2 Коментара</a>
                        <a href="javascript:void(0)" class="link m-r-10">
                            <i class="fa fa-thumbs-up text-success"></i> 10</a>

                        <a href="javascript:void(0)" class="link m-r-10"> <i
                                    class="fa fa-heart text-danger"></i> 64</a>
                        <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                                            text-primary"></i> {{$article->views}}</a>
                    </div>

                </div>

            </div>
        </div>

@endsection

