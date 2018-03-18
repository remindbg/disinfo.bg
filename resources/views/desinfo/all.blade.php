@extends('layouts.front')

@section('title', 'Homepage')

@section('content')
    <div class="card card-inverse card-primary p-3 text-center">
        <p> Намерите се в страницата, в която се разглеждат случаи на дезинформация. Подробности за всеки случай,
            можете да откриете в цялата публикация, както и да докладвате или добавите съдържание.</p>
    </div>
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-bookmark  ribbon-warning">21.03.2017</div>
        <a href="#"><h4 class="font-weight-bold">Подготвя ли се НАТО за война с Русия в близките 2
                години?</h4></a>
        <div class="ml-auto">
            <ul class="list-inline">
                <small>Етикети:</small>
                <li>
                    <a href="">
                        <h6 class="text-muted text-success">
                            <i class="fa fa-circle font-10 m-r-10 ">
                            </i>
                            България</h6></a>
                </li>
                <li>
                    <a href="">
                        <h6 class="text-muted text-success">
                            <i class="fa fa-circle font-10 m-r-10 ">
                            </i>
                            България</h6></a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img class="img-responsive" src="assets/images/users/1.jpg"
                     alt="user">
            </div>
            <div class="col-lg-10">
                {{-- ТЕКСТ ИНТРО--}}
                <p class="ribbon-content">В сайта се разглеждат случаи на дезинформация и подвеждаща информация.
                    В сайта се разглеждат случаи на дезинформация и подвеждаща информация.
                </p>
                <hr>
                <a href="#"><button type="button" class="btn waves-effect waves-light
                                        btn-outline-success">Подробности...
                    </button></a>
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
                    <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                                            text-primary"></i> 5 Свързани Медии</a>

                </div>
            </div>
        </div>
    </div>
@endsection

