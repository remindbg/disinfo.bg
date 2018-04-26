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
<footer class="footer"> © 2018 desinfo.info</footer>
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
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ URL::asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}
        "></script>

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
</body>

</html>