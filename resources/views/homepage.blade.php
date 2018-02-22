@extends('layouts.front')

@section('title', 'Homepage')

@section('content')
    <div class="card card-inverse card-primary p-3 text-center">
        <p> В сайта се разглеждат случаи на дезинформация и подвеждаща информация.</p>
    </div>
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-bookmark  ribbon-warning">21.03.2017</div>
        <h3 class="font-weight-bold">Подготвя ли се НАТО за война с Русия в близките 2
            години?</h3>
        <div class="row">
            <div class="col-lg-2">
                <img class="img-thumbnail" src="assets/images/users/1.jpg"
                     alt="user">
            </div>
            <div class="col-lg-9">
                <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor
                    ligula</p>
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
                                class="fa fa-thumbs-down text-danger"></i> 10</a>
                    <a href="javascript:void(0)" class="link m-r-10"> <i
                                class="fa fa-heart text-danger"></i> 64</a>
                    <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                                            text-primary"></i> 1234</a>

                </div>

            </div>

        </div>
    </div>
    @endsection

