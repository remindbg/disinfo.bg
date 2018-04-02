@extends('layouts.front')

@section('title', 'Homepage')

@section('content')
    <div class="col-lg-8">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark  ribbon-warning">21.03.2017</div>
            <h3 class="font-weight-bold">{{$article->title}}</h3>

            <div class="ml-auto">
                <ul class="list-inline">
                    <small>Категория:</small>
                    <li>
                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>
                            <a href="/articles/{{$article->category->slug}}">{{$article->category->name}}</a>
                        </h6>
                    </li>
                </ul>
            </div>
            <div class="like-comm">
                <a href="#comments" class="link m-r-10">2 Коментара</a>
                <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                                            text-primary"></i> {{$article->views}}</a>
            </div>

                <hr>
                <div class="m-t-20 row">
                    <div class="col-md-3 col-xs-12"><img src="{{$article->imageurl}}" alt="Статия Изображение"
                                                         class="img-responsive
                        radius"
                        /></div>
                    <div class="col-md-9 col-xs-12">
                        <p>{!!$article->body!!}</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <hr>
                    <div class="like-comm">
                        <a href="javascript:void(0)" class="link m-r-10">2 Коментара</a>
                        <a href="javascript:void(0)" class="link m-r-10"> <i class="fa fa-eye
                        text-primary"></i> {{$article->views}}</a>
                    </div>
                </div>

            </div>


        <div class="card" id="comments">
            <div class="card-body">
                <h4 class="card-title">Коментари</h4>
                <h6 class="card-subtitle">Напишете Коментар</h6> </div>
            <!-- ============================================================== -->
            <!-- Comment widgets -->
            <!-- ============================================================== -->
            <div class="comment-widgetstest">
                <div class="col-md-12">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 text-right control-label
                                col-form-label">Име*</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Име">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 text-right control-label
                                col-form-label">Email*</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-1 text-right control-label
                                col-form-label"></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5"></textarea>

                                </div>

                            </div>

                            <div class="form-group m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-info waves-effect waves-light
                                    m-t-10">Изпрати</button>
                                </div>
                            </div>
                        </form>

                </div>

                <div class="d-flex flex-row comment-row">
                    <div class="p-2"></div>
                    <div class="comment-text w-100">
                        <h5>Ivan Dimitrov | #5</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span>
                                                </span> </div>
                    </div>
                </div>
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"></div>
                    <div class="comment-text w-100">
                        <h5>Ivan Dimitrov</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span>
                            </span> </div>
                    </div>
                </div>
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"></div>
                    <div class="comment-text w-100">
                        <h5>Ivan Dimitrov</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span>
                            </span> </div>
                    </div>
                </div>
                <div class="d-flex flex-row comment-row">
                    <div class="p-2"></div>
                    <div class="comment-text w-100">
                        <h5>Ivan Dimitrov</h5>
                        <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                        <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span>
                            </span> </div>
                    </div>
                </div>


            </div>
        </div>
    </div>





@endsection

