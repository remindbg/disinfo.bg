@extends('layouts.adminlayout')
@section('content')

    <!-- Start Page content -->
    <div class="card-box">
        <h4 class="header-title mb-4">Категории</h4>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Заглавие</th>
                            <th>Текст...</th>
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
                            <td>текст засега празен</td>
                            <td>категория</td>
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
        $(document).ready(function() {

            if ($("textarea").length > 0) {
                tinymce.init({
                    selector: "textarea",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
    </script>
@endsection
