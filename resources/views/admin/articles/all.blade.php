@extends('layouts.adminlayout')
@section('content')
    <div class="card-box">
        <h4 class="header-title mb-4">Статии</h4>
        <div class="row">
            <a href="/admin/articles/create" class="btn
                            btn-success"> Нова Статия..
                .</a>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Заглавие</th>
                            <th>Категория</th>
                            <th>isApproved</th>
                            <th>Прегледа</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->category->name}}</td>
                            <td>{{$article->isApproved}}</td>
                            <td>{{$article->views}}</td>
                            <td>{{$article->created_at}}</td>
                            <td class="text-nowrap">
                                <a href="/admin/articles/edit/{{$article->id}}" data-toggle="tooltip"
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
        <!-- end row -->
    </div>

@endsection

@section('scripts')
    <script>

    </script>
@endsection
