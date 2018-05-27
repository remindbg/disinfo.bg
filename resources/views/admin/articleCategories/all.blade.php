@extends('layouts.adminlayout')
@section('content')

    <div class="card-box">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <h4 class="header-title mb-4">Категории</h4>
        <div class="row">
            <a href="/admin/articles/categories/create" class="btn
                            btn-success"> Нова Категория..
                .</a>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Заглавие</th>
                            <th>Slug</th>
                            <th>Date</th>
                            <th>Брой Публикации</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->articles->count()}}</td>
                                <td class="text-nowrap">
                                    <a href="/admin/articles/categories/edit/{{$category->id}}" data-toggle="tooltip"
                                       data-original-title="Edit">
                                        <i class="fa
                                fa-pencil
                                text-inverse m-r-10"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>

    </script>
@endsection
