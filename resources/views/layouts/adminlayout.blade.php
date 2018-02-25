@include('admin._static.header')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Table</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Table</li>
                    </ol>
                </div>
                <div class="col-md-7 col-4 align-self-center">
                    <div class="d-flex m-t-10 justify-content-end">
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                <h4 class="m-t-0 text-info">$58,356</h4></div>
                            <div class="spark-chart">
                                <div id="monthchart"></div>
                            </div>
                        </div>
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                <h4 class="m-t-0 text-primary">$48,356</h4></div>
                            <div class="spark-chart">
                                <div id="lastmonthchart"></div>
                            </div>
                        </div>
                        <div class="">
                            <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Статии</h4>
                            <h6 class="card-subtitle">Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive </code></h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Invoice</th>
                                        <th>User</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Country</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0)">Order #26589</a></td>
                                        <td>Herman Beck</td>
                                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>
                                        <td>$45.00</td>
                                        <td>
                                            <div class="label label-table label-success">Paid</div>
                                        </td>
                                        <td>EN</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)">Order #58746</a></td>
                                        <td>Mary Adams</td>
                                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2017</span> </td>
                                        <td>$245.30</td>
                                        <td>
                                            <div class="label label-table label-danger">Shipped</div>
                                        </td>
                                        <td>CN</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)">Order #98458</a></td>
                                        <td>Caleb Richards</td>
                                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> May 18, 2017</span> </td>
                                        <td>$38.00</td>
                                        <td>
                                            <div class="label label-table label-info">Shipped</div>
                                        </td>
                                        <td>AU</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)">Order #32658</a></td>
                                        <td>June Lane</td>
                                        <td><span class="text-muted"><i class="fa fa-clock-o"></i> Apr 28, 2017</span> </td>
                                        <td>$77.99</td>
                                        <td>
                                            <div class="label label-table label-success">Paid</div>
                                        </td>
                                        <td>FR</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->

            </div>
           @include('admin._static.footer')