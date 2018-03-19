@extends('layouts.adminlayout')


@section('content')

    <!-- Start Page content -->
                    <div class="card-box">
                        <h4 class="header-title mb-4">Всички Случаи на Дезинформация</h4>

                        <div class="row">
                            <div class="col-lg-12">
                                @if(\Session::has('success'))
                                    <div class="alert alert-success">
                                        {{\Session::get('success')}}
                                    </div>
                                @endif

                            </div>

                        </div>
                        <!-- end row -->
                    </div>




    @endsection