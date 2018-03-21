@extends('layouts.front')

@section('title', 'Начало')

@section('content')

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round round-lg align-self-center round-info"><i class="ti-wallet"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-light">3249</h3>
                        <h5 class="text-muted m-b-0">Статии</h5></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-lgiht">135</h3>
                        <h5 class="text-muted m-b-0">Случаи На Дезинфo</h5></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-eye"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-lgiht">17955</h3>
                        <h5 class="text-muted m-b-0">Анализирани Думи</h5></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                    <div class="m-l-10 align-self-center">
                        <h3 class="m-b-0 font-lgiht">243</h3>
                        <h5 class="text-muted m-b-0">Медии</h5></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-8 col-xlg-8">

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
        <div class="row">
            <div class="col-lg-2">
                <img class="img-thumbnail" src="assets/images/users/1.jpg"
                     alt="user">
            </div>
            <div class="col-lg-10">
                <hr>
                <p class="ribbon-content">В сайта се разглеждат случаи на дезинформация и подвеждаща информация.
                    В сайта се разглеждат случаи на дезинформация и подвеждаща информация.
                </p>
                <hr>
                <button type="button" class="btn waves-effect waves-light
                                        btn-outline-success">Повече...
                </button>

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
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-bookmark  ribbon-warning">21.03.2017</div>
        <h3 class="font-weight-bold">Подготвя ли се НАТО за война с Русия в близките 2
            години?</h3>

        <div class="ml-auto">

            <ul class="list-inline">
                <small>Регион:</small>
                <li>
                    <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>България</h6>
                </li>
                <li>
                    <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Свят</h6>
                </li>


            </ul>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img class="img-thumbnail" src="assets/images/users/1.jpg"
                     alt="user">
            </div>
            <div class="col-lg-10">
                <p class="ribbon-content">В сайта се разглеждат случаи на дезинформация и подвеждаща информация.
                    В сайта се разглеждат случаи на дезинформация и подвеждаща информация.
                </p>
                <hr>
                <button type="button" class="btn waves-effect waves-light
                                        btn-outline-success">Повече...
                </button>

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
