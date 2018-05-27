@extends('layouts.adminlayout')
@section('content')
    <!-- Start Page content -->
    <div class="card-box">
        <h4 class="header-title mb-4">Статии</h4>
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
                <form class="form-horizontal" role="form" method="POST" action="{{url('/admin/articles/store')
                }}">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Заглавие</label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Slug ( url ) </label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="" name="slug">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">URL</label>
                        <div class="col-10">
                            <input type="text" class="form-control" value="" name="imageurl">
                        </div>
                    </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">Тагове </label>
                            <div class="col-10">
                                <input type="text" class="form-control" value="" name="tags">
                            </div>
                        </div>

                    <div class="form-group row">
                        <label class="col-2 col-form-label">Категория</label>
                        <div class="col-10">
                            <div class="form-check">

                                @foreach($cats as $category)
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" value="{{$category->id}}"
                                                   name="selectCat[]"
                                                   class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">{{$category->name}}</span>
                                        </label>

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Текст</label>
                        <div class="col-10">
                            <textarea class="form-control" rows="5" name="body"></textarea>
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

    <script src="{{asset('/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
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
