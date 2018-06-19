@extends('layouts.adminlayout')
@section('content')

    <div class="card-box">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <h5 class="header-title mb-4">Всички Източници за Дезинформация с текст: {{$article->title}}</h5>
        <div class="row">
            <a href="/admin/articles/sources/create" class="btn
                            btn-success"> Нова Източник..
                .</a>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Заглавие</th>

                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($article->sources as $source)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td class="text-nowrap">
                                    <div class="btn btn-warning"> <a href="/admin/articles/sources/edit/{{$source->id}}"><i class="fa
                                fa-pencil
                                text-inverse m-r-10"></i>Edit </a></div>
                                    <form method="POST" action="/admin/articles/sources/delete/{{$source->id}}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-red">Изтрий</button>
                                    </form>
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
