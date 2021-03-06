@include('_partials/admintopmenu');

<div class="page-wrapper">

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Начало</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)"></a>
                    </li>
                    <li class="breadcrumb-item active"></li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <div class="d-flex m-t-10 justify-content-end">
                    <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                        <div class="chart-text m-r-10">
                            <h6 class="m-b-0">
                                <small>Версия 1.1.0 *beta*</small>
                            </h6>
                        </div>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10">
                            <i class="ti-settings text-white"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-md-12 col-xlg-12">
                @yield('content')
            </div>

        <!-- Column -->
        </div>
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Настройки
                <span>
                                <i class="ti-close right-side-toggle"></i>
                            </span>
            </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li>
                        <b>Светъл Хедър</b>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="default" class="default-theme">1</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="green" class="green-theme">2</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="red" class="red-theme">3</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a>
                    </li>
                    <li class="d-block m-t-30">
                        <b>Тъмен Хедър</b>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer"> © 2017 Material Pro Admin by wrappixel.com</footer>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Настройки
            <span>
                                <i class="ti-close right-side-toggle"></i>
                            </span>
        </div>
        <div class="r-panel-body">
            <ul id="themecolors" class="m-t-20">
                <li>
                    <b>Светъл Хедър</b>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="default" class="default-theme">1</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="green" class="green-theme">2</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="red" class="red-theme">3</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a>
                </li>
                <li class="d-block m-t-30">
                    <b>Тъмен Хедър</b>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                </li>
            </ul>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer"> © 2017 Material Pro Admin by wrappixel.com</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}
        "></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ URL::asset('assets/plugins/bootstrap/js/popper.min.js') }}
        "></script>
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}
        "></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ URL::asset('js/jquery.slimscroll.js') }}
        "></script>
<!--Wave Effects -->
<script src="{{ URL::asset('js/waves.js') }}
        "></script>
<!--Menu sidebar -->
<script src="{{ URL::asset('js/sidebarmenu.js') }}
        "></script>
<!--stickey kit -->

<script src="{{ URL::asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}
        "></script>
<script src="{{ URL::asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}
        "></script>
<script src="{{ URL::asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}
        "></script>
<!--Custom JavaScript -->
<script src="{{ URL::asset('js/custom.min.js') }}
        "></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->

<script src="{{ URL::asset('assets/plugins/chartist-js/dist/chartist.min.js') }}
        "></script>
<script src="{{ URL::asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}
        "></script>
<!--c3 JavaScript -->
<script src="{{ URL::asset('assets/plugins/d3/d3.min.js') }}
        "></script>
<script src="{{ URL::asset('assets/plugins/c3-master/c3.min.js') }}
        "></script>
<!-- Chart JS -->
<script src="{{ URL::asset('js/dashboard6.js') }}
        "></script>

<script src="{{ URL::asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}
        "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

@yield('scripts')
</body>

</html>