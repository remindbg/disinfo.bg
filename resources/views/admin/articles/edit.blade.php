@extends('layouts.adminlayout')
@section('meta')


@endsection


@section('content')

    <!-- Start Page content -->
    <div class="card-box">
        <h4 class="header-title mb-4">Редакция на Публикация</h4>

        <div class="col-lg-12">
            @if(\Session::has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    {{\Session::get('message')}}
                </div>

            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if($article->articleType == 1)
                <div class="btn btn-primary"><a href="/admin/articles/{{$article->id}}/sources/create">Добавяне на Източник</a></div>
                @endif
                <form class="form-horizontal" role="form" method="POST"
                      action="/admin/articles/update/{{$article->id}}">
                    <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Заглавие</label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="{{$article->title}}" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Slug ( url ) </label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="{{$article->slug}}" name="slug">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">URL</label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="{{$article->imageurl}}" name="imageurl">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label cat">Активна?</label>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sel1"></label>
                                <select class="form-control" name="isActive" id="sel1">

                                    <option value="1" @if($article->isActive) selected @endif>Да</option>
                                    <option value="0" @if($article->isActive == false) selected @endif >Не</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Тип :  </label>
                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="sel1"></label>
                                        <select class="form-control" name="articleType" id="sel1">

                                            <option value="1" @if($article->articleType == 1) selected @endif>Дезинформация</option>
                                            <option value="2" @if($article->articleType == 2) selected @endif >Блог</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check">
                                <label class="col-2 col-form-label">Kategoriq :  </label>

                            @foreach($allcategories as $category)

                                @if(!$article->categories->contains($category->id))
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" value="{{$category->id}}"
                                                   name="selectCat[]"
                                                   class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">{{$category->name}}</span>
                                        </label>
                                @else
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" checked value="{{$category->id}}"
                                                   name="selectCat[]"
                                                   class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">{{$category->name}}</span>
                                        </label>
                                @endif
                                @endforeach
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Тагове </label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="@foreach($article->tags as $tag){{$tag->name}},@endforeach "name="tags">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Дата </label>
                        <div class="col-10">

                            <input type="text" class="form-control" value=" {{$article->created_at->format
                            ('Y г.  m месец и d ден в  Hч.  m минути и s секунди')}}" name="date">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Текст</label>
                        <div class="col-10">
                            <textarea class="form-control body" rows="5" name="body">{{$article->body}}</textarea>
                        </div>
                    </div>
                    @if($article->articleType == 1)
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Обобщение ( ако е дезинформация )</label>
                        <div class="col-10">
                            <textarea class="form-control" rows="3" name="summary_desinfo">{{$article->summary_desinfo}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Заключение (много накратко ) </label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="{{$article->desinfo_conclusion}}" name="desinfo_conclusion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Дата на дезинформацията </label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="{{$article->desinfo_date}}" name="desinfo_date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Афектирана Страна/ Страни </label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="{{$article->affected_country}}" name="affected_country">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Оригинален Източник ( страна ) </label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="{{$article->desinfo_started}}" name="desinfo_started">
                        </div>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Добави</button>
                </form>
            </div>
        </div>
        <!-- end row -->
    </div>

@endsection

@section('scripts')
    <script>

        if ($(".body").length > 0) {
            tinymce.init({
                selector: ".body",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        };


    </script>

@endsection
