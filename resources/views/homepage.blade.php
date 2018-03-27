@extends('layouts.front')

@section('title', 'Начало')

@section('content')

    <div class="col-lg-8">

        <h3>Последни Статии и Анализи</h3>
    <div class="card card-inverse card-primary p-3 text-center">
        <p> В сайта се разглеждат случаи на дезинформация и подвеждаща информация. Сайта е в процес на разработка</p>
    </div>
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-bookmark  ribbon-warning">21.03.2017</div>
        <h3 class="font-weight-bold">Подготвя ли се НАТО за война с Русия в близките 2
            години?</h3>

        <div class="ml-auto">

            <ul class="list-inline">
                <small>Тип:</small>
                <li>
                    <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Статия</h6>
                </li>
                <li>
                    <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Свят</h6>
                </li>
            </ul>
        </div>
            <div class="m-t-20 row">
                <div class="col-md-3 col-xs-12"><img src="../assets/images/big/img1.jpg" alt="user" class="img-responsive radius" /></div>
                <div class="col-md-9 col-xs-12">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
                        Sed cursus ante dapibus diam. </p> <a href="#" class="btn btn-success"> Повече...</a></div>
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
                                            text-primary"></i> 1234</a>
                </div>
            </div>
    </div>
    </div>
@endsection

