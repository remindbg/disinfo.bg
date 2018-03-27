@extends('layouts.adminlayout')
@section('content')

    <!-- Start Page content -->
    <div class="card-box">
        <h4 class="header-title mb-4">Нова Категория</h4>
        @if(\Session::has('success'))
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" role="form" method="POST" action="{{url
                ('/admin/articles/categories/create')
                }}">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Заглавие</label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Slug ( url ) </label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="" name="slug">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Добави</button>

                </form>
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
