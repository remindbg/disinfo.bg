<div class="col-lg-4">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Последни</h4>
            <div class="card-body">
                <dl class="small">
                    @foreach($articles as $article)
                    <dt>
                        <a href="/articles/{{$article->category
                        ->slug}}/{{$article->id}}/{{$article->slug}}">{{$article->title}}</a>
                    </dt>
                    <dd>{{$article->created_at}}</dd>
                    @endforeach()
                </dl>
                <small><a href="/articles/">Вижте Всички</a></small>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Статии И Анализи</h4>
            <div class="card-body">
                <table class="table browser no-border">
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td><a href="/articles/{{$category->slug}}">{{$category->name}}</a></td>
                        <td class="text-right"><span class="label label-light-info">{{$category->articles()->count()
                        }}</span></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Последни Коментари</h4>

        </div>
    </div>
    <!-- Column -->
</div>