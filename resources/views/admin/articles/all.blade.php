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
                            <th>Одобрена?</th>
                            <th>Прегледа</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            @if($article->isActive == 0)
                                <td>Не</td>
                            @else
                                <td>Да</td>
                            @endif
                                <td>{{$article->views}}</td>
                            <td>{{$article->created_at}}</td>
                            <td class="text-nowrap">
                                <div class="btn btn-warning"> <a href="/admin/articles/edit/{{$article->id}}"><i class="fa
                                fa-pencil
                                text-inverse m-r-10"></i>Edit </a></div>
                                <form method="POST" action="/admin/articles/delete/{{$article->id}}">
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
        function confirmDelete() {
            confirm('Искате ли да изтриете статията завинаги?');
        }
    </script>
@endsection
