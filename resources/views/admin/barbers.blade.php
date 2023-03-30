<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/template/admin/assets/images/favicon1.png')}}">
    <title>Barber Constantine -Menu</title>
    <!-- Custom CSS -->
    <link href="{{asset('/template/admin/assets/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/template/admin/assets/extra-libs/multicheck/multicheck.css')}}">
    <link href="{{asset('/template/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('/template/admin/dist/css/style.min.css')}}" rel="stylesheet">
    <style>



        img{
            max-width: 100%;
            max-height: 100%;
            display: block; /* remove extra space below image */
        }

        div.el-card-item {
            padding: 0 !important;
        }

        div.el-card-avatar.el-overlay-1 {
            margin: 0 !important;
        }



    </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script>

        function onClickDelete(nom , id) {

            var result = confirm("Confirmer la suppression de " + nom);
            if (result) {
                $.ajax({
                    '_token': $('meta[name=csrf-token]').attr('content'),
                    type: 'POST',
                    data: JSON.stringify({id: id}),
                    contentType: "application/json",
                    url: '/admin/deleteBarber',


                    success: function()
                    {
                        alert("Coiffeur supprimé avec succes");
                        window.location.href = "{{ route('getbarbers')}}";

                    },
                    error: function()
                    {
                        window.location.href = "{{ route('error')}}";

                    }
                });
            }

        }

    </script>
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="{{route('home')}}">
                    <!-- Logo icon -->
                    <b class="logo-icon p-l-10">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{ URL::to('/template/admin/assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="{{ URL::to('/template/admin/assets/images/logo-text.png') }}" alt="homepage" class="light-logo" />

                        </span>
                    <!-- Logo icon -->
                    <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ URL::to('/template/admin/assets/images/1.jpg') }}" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="{{route('myProfile')}}"><i class="ti-user m-r-5 m-l-5"></i> Mon profile</a>
                            <!--   <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> Estimation des profits</a> -->

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('adminSetting')}}"><i class="ti-settings m-r-5 m-l-5"></i> Parametres</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"  onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"  href="{{route('logout')}}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Se déconnecter</a>
                            <div class="dropdown-divider"></div>

                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Menu principal</span></a></li>


                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('clients')}}" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Clients</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-calendar-today"></i><span class="hide-menu">Rendez-vous</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{route('schedule',['id'=>0])}}" class="sidebar-link"><i class="mdi mdi-calendar-today"></i><span class="hide-menu"> Aujourd'hui </span></a></li>
                            <li class="sidebar-item"><a href="{{route('schedule',['id'=>1])}}" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Demain </span></a></li>
                            <li class="sidebar-item"><a href="{{route('schedule',['id'=>2])}}" class="sidebar-link"><i class="mdi mdi-calendar-range "></i><span class="hide-menu"> Après-demain </span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('planning')}}" aria-expanded="false"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu">Calendrier</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('shopSettings')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Parametres</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('adminSetting')}}" aria-expanded="false"><i class="mdi mdi-pause-circle"></i><span class="hide-menu">Weekends</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('editworkday')}}" aria-expanded="false"><i class="fas fa-stopwatch"></i><span class="hide-menu">Modifier journee libre</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('getCoiffures')}}" aria-expanded="false"><i class="fas fa-cut"></i><span class="hide-menu">Liste des coiffures</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Administrateur </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{route('registerAdmin')}}" class="sidebar-link"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu"> Ajouter admin </span></a></li>
                            <li class="sidebar-item"><a href="{{route('adminlist')}}" class="sidebar-link"><i class="mdi mdi-account-remove"></i><span class="hide-menu"> Liste des admins </span></a></li>

                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <button class="btn btn-success" data-toggle="modal" data-target="#AjoutModal">Ajouter nouveau coiffeur</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="AjoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter Coiffeur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Annuler">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{route('addbarber')}}" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-md-3" for="disabledTextInput">Nom coiffeur</label>
                                    <div class="col-md-9">
                                        <input type="text" id="disabledTextInput" class="form-control" name="nom" placeholder="Doe" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3" for="prenom">Prenom</label>
                                    <div class="col-md-9">
                                        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="John" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <label class="col-md-3">Photo coiffeur</label>
                                        <input type="file" name="image" class="form-control" id="image" required>
                                    </div>
                                </div>


                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <input type="submit" class="btn btn-primary"/>
                                </div>
                            </div>
                        </div>
                    </form> </div>
            </div>
        </div>



        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($coiffeurs as $c)
                                        <tr>
                                            <td>
                                                <div class="row el-element-overlay">
                                                    <div class="card">
                                                        <div class="el-card-item">
                                                            <div class="el-card-avatar el-overlay-1">  <img src="{{ asset('storage/product/'.$c->photo) }} " />
                                                                <div class="el-overlay">
                                                                    <ul class="list-style-none el-info">
                                                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ URL::asset('storage/product/'.$c->photo)}} "><i class="mdi mdi-magnify-plus"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                            <td>{{$c->nom}}</td>
                                            <td>{{$c->prenom}}</td>
                                            <td> <!-- new Content -->
                                                <button type="button" class="btn btn-danger" id="deleteC" onclick="onClickDelete('{{$c->nom}}' , '{{$c->idCoiffeur}}')">
                                                    <i class="mdi mdi-delete-forever font-24"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        {{--                                                @if($c->blocked)--}}
                                        {{--                                                    <button type="submit" class="btn btn-danger" name="bloquer" value="bloquer">Bloquer</button>--}}
                                        {{--                                                @else--}}
                                        {{--                                                    <button type="submit" class="btn btn-success" name="bloquer" value="debloquer">Debloquer</button>--}}
                                        {{--                                            </td></form>--}}
                                        {{--                                        @endif--}}

                                        <!-- Modal popsup -->
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
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
        <footer class="footer text-center">
            Developpé par  <a href="https://facebook.com/taki729">Taki eddine Seghiri</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>



</div>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{asset('template/admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('template/admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('template/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('template/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('template/admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('template/admin/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('template/admin/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('template/admin/dist/js/custom.min.js')}}"></script>
<!-- this page js -->
<script src="{{asset('template/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('template/admin/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{asset('template/admin/assets/extra-libs/DataTables/datatables.min.js')}}"></script>

<!-- this popup js -->
<script src="{{asset('template/admin/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('template/admin/assets/libs/magnific-popup/meg.init.js')}}"></script>

<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>

<script>
    $(".modifier").click(function() {
        var $item = $(this).closest("tr")   // Finds the closest row <tr>
            .find(".nr")     // Gets a descendent with class="nr"
            .text();         // Retrieves the text within <td>

        $("#resultas").append($item);       // Outputs the answer
    });

</script>

</body>

</html>