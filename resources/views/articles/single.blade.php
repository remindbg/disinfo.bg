@extends('layouts.front')

@section('title', 'Статии')

@section('content')
    <div class="col-lg-8">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark  ribbon-warning">21.03.2017</div>
            <h3 class="font-weight-bold">{{$article->title}}</h3>
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

