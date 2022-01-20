<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/admin/images/logo.png')}}">
    <title>Jani & Jack</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/admin/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/admin/node_modules/dropify/dist/css/dropify.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/node_modules/html5-editor/bootstrap-wysihtml5.css')}}" />
    <link href="{{asset('/admin/node_modules/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <!-- Date picker plugins css -->
    <link href="{{asset('/admin/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="{{asset('/admin/node_modules/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/node_modules/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Dropzone css -->
    <link href="{{asset('/admin/node_modules/dropzone-master/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="{{asset('/admin/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('/admin/node_modules/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
    <!-- Footable CSS -->
    <link href="{{asset('/admin/node_modules/footable/css/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/css/pages/contact-app-page.css')}}" rel="stylesheet" />
    <!-- Page CSS -->
    <link href="{{asset('/admin/css/pages/footable-page.css')}}" rel="stylesheet">

    <link href="{{asset('/admin/css/colors/default.css')}}" id="theme" rel="stylesheet">
    {{-- <link href="{{asset('/admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css"> --}}
    <link href="{{asset('/admin/node_modules/image-uploader/dist/image-uploader.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('/admin/node_modules/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/admin/node_modules/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin/node_modules/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin/node_modules/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />

    {{-- <link href="{{asset('/admin/css/pages/floating-label.css')}} " rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>

<style>
    .text-themecolor {
    /* color: #C81631  !important; */
    color: #040619  !important;
    }

    .qcont::first-letter{
        text-transform: capitalize;
    }
</style>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Jenny Loading....</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->


                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('usersetting.edit')}}">
                        <b>
                         <img src="{{asset('/admin/images/logo1.png')}}" alt="homepage" class="mt-2 dark-logo" /></b>
                         <span class="text-white">Peter Brown & Sons</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>

                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="sl-icon-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{-- <img src="{{asset('/admin/images/users/1.jpg')}}" alt="user" class="" /> --}}
                                <span class="hidden-md-down" style="text-transform: uppercase">Admin<i class="fa fa-angle-down ml-2"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-text">
                                                    <h4 style="text-transform: capitalize">Admin</h4>
                                                    <p class="text-muted">admin@gmail.com</p>

                                                </div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{ route("dashboard") }}"><i class="icon-Car-Wheel"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-product-hunt"></i><span class="hide-menu">Product</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route("product.view") }}">View</a></li>
                                <li><a href="{{ route("product.add") }}">Add </a></li>
                            </ul>
                        </li>


                        <li> <a class="waves-effect waves-dark" href="{{ route("categories.index") }}"><i class="fa fa-columns"></i><span class="hide-menu">Categories</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{ route("banners.index") }}"><i class="fa fa-image"></i><span class="hide-menu">Banners</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{ route("subscriber") }}"><i class="fa fa-bell-o"></i><span class="hide-menu">Subscribers</span></a></li>

                    </ul>
                </nav>
            </div>
        </aside>
        @yield('content')
        <footer class="footer text-center">Jani & Jack © 2021 Developed by <a href="https://digitrestle.com/" class="text-danger" target="_blank">Digitrestle.com</a></footer>
        </div>

    </div>




    <script src="{{asset('/admin/node_modules/jquery/jquery.min.js')}}"></script>
    @yield('lib');
    <script src="{{asset('/admin/node_modules/image-uploader/dist/image-uploader.min.js')}}"></script>

    <!-- This is data table -->
    {{-- <script src="/admin/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/admin/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- Dropzone Plugin JavaScript -->
    <script src="{{asset('/admin/node_modules/dropzone-master/dist/dropzone.js')}}"></script>
    <!-- DateRange JavaScript -->
    <script src="{{asset('/admin/node_modules/moment/moment.js')}}"></script>
    <script src="{{asset('/admin/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="{{asset('/admin/node_modules/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="{{asset('/admin/node_modules/jquery-asColorPicker-master/libs/jquery-asColor.js')}}"></script>
    <script src="{{asset('/admin/node_modules/jquery-asColorPicker-master/libs/jquery-asGradient.js')}}"></script>
    <script src="{{asset('/admin/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{asset('/admin/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="{{asset('/admin/node_modules/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('/admin/node_modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('/admin/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- Treeview Plugin JavaScript -->
    <script src="{{asset('/admin/node_modules/bootstrap-treeview-master/dist/bootstrap-treeview.min.js')}}"></script>
    <script src="{{asset('/admin/node_modules/bootstrap-treeview-master/dist/bootstrap-treeview-init.js')}}"></script>
    <!-- jQuery file upload -->
    <script src="{{asset('/admin/node_modules/dropify/dist/js/dropify.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('/admin/node_modules/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('/admin/node_modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('/admin/node_modules/ps/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('/admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('/admin/js/app.js')}}"></script>
    <script src="{{asset('/admin/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('/admin/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('/admin/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('/admin/js/custom.min.js')}}"></script>
    <script src="{{asset('/admin/js/jasny-bootstrap.js')}}"></script>

    <script src="{{asset('/admin/node_modules/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/admin/node_modules/moment/moment.js')}}"></script>
    <script src='{{asset('/admin/node_modules/calendar/dist/fullcalendar.min.js')}}'></script>
    <script src="{{asset('/admin/node_modules/calendar/dist/cal-init.js')}}"></script>

    <script src="{{asset('/admin/node_modules/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('/admin/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/admin/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/admin/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('/admin/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
    <script src="{{asset('/admin/node_modules/multiselect/js/jquery.multi-select.js')}}" type="text/javascript"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('/admin/node_modules/styleswitcher/jQuery.style.switcher.js')}}"></script>
    @yield('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
        $("#select2").select2();
        $("input[type='file']").bind('change', function() {
            if(this.files[0].size>500000){
                $(this).val("");
                var id=$(this).attr("data-id");
                $("#"+id).attr("src","{{asset('placeholder.png')}}");

                alert("Image more than 500kbs is not allowed");
                return;
            }
            else{

            }
        });
    </script>
    @section('js')
    <script>
        $(document).ready( function () {
    $('#dataTable').DataTable();
} );
    </script>

@endsection

    <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
      </script>

</body>

</html>
