<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cuaderno de negocios</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('mysystemdesign/font/font.css')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('mysystemdesign/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <!-- <link href="{{asset('mysystemdesign/plugins/node-waves/waves.css')}}" rel="stylesheet" /> -->

    <!-- Animation Css -->
    <link href="{{asset('mysystemdesign/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{asset('mysystemdesign/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <!-- <link href="{{asset('mysystemdesign/plugins/morrisjs/morris.css')}}" rel="stylesheet" /> -->

    <!-- Custom Css -->
    <link href="{{asset('mysystemdesign/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('mysystemdesign/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Espere por favor...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">CUADERNO DE NEGOCIOS<span id="nameCompany" ></span></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    
                    <li>
                        <a href="javascript:void(0);">
                            <strong id="nombreEmpresaHead">
                            @if( Session::has('id_empresa'))
                                {{Session::get('nombre_empresa')}}
                            @endif  
                            </strong>
                            &nbsp;
                            <strong id="nombreCampanhaHead">
                            @if( Session::has('id_campanha'))
                                {{Session::get('nombre_campanha')}}
                            @endif
                            </strong>
                            &nbsp;
                            <strong id="nombre¨ProductoHead">
                            @if( Session::has('id_producto'))
                                {{Session::get('nombre_producto')}}
                            @endif
                            </strong>
                        </a>
                    </li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        {{ Auth::user()->name.' '.Auth::user()->last_name}}
                        </a>
                    </li>

                     <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">account_circle</i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="footer">
                                <a href="{{url('logout')}}">Salir</a>
                            </li>
                        </ul>
                    </li>
                  
                    <!-- #END# Notifications -->
                    <!-- Tasks -->   
                    <!-- #END# Tasks -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
              
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name.' '.Auth::user()->last_name}}</div>
                    <div class="email"> {{ Auth::user()->email}}</div>
                   
                </div>
            </div>

            <div id="selectEmpresa" >
                <span style="font-size:30px " id="nombre_empresa">
                    @if( Session::has('id_empresa'))
                                {{Session::get('nombre_empresa')}}
                    @endif 
                </span>
                <div class="btn-group user-helper-dropdown pull-right">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right" id="listaEmpresa">
                </ul>
                </div>
            </div>
            
            @if( Session::has('id_campanha'))
            <div id='selectCampanha'>
            @else
            <div id='selectCampanha' style="display:none;">
            @endif 
            
                <span style="font-size:20px " id="nombre_camp">
                            @if( Session::has('id_campanha'))
                                {{Session::get('nombre_campanha')}}
                            @endif 
                </span>
                <div class="btn-group user-helper-dropdown pull-right">
                   
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right" id="listaCampanha">
                    </ul>
                </div>
            </div>
            

         
  
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Productos</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/producto/create')}}">Agregar productos</a>
                            </li>
                            <li>
                                <a href="{{('/producto')}}">Productos disponibles</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Productos Entregados</a>
                            </li>
                            
                            <li>
                                <a href="">Productos cancelados</a>
                            </li>
                            
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>Clientes</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/cliente/create')}}">Agregar cliente</a>
                            </li>
                            <li>
                                <a href="{{url('/cliente')}}">Lista de clientes</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Clientes pago al contado</a>
                            </li>
                            
                            <li>
                                <a href="">Clientes pago a Credito</a>
                            </li>
                            
                        </ul>
                    </li>
                   

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Campaña</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/campanha')}}">
                                    <span>Ver campaña</span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Empresa</span>
                            </a>
                                <ul class="ml-menu">
                                <li>
                                    <a href="{{url('/empresa')}}">
                                    <span>Ver mis empresas</span>
                                    </a>
                                </li> 
                          
                        </ul>
                    </li>
                   
               
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                
               
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>

     <section class="content">
        <div class="container-fluid">
           @yield('content')
           
        </div>
    </section>

    

    <!-- Jquery Core Js -->
    <script src="{{asset('mysystemdesign/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('mysystemdesign/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('mysystemdesign/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <!-- <script src="{{asset('mysystemdesign/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script> -->

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('mysystemdesign/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <!-- <script src="{{asset('mysystemdesign/plugins/jquery-countto/jquery.countTo.js')}}"></script> -->

    <!-- Morris Plugin Js -->
    <!-- <script src="{{asset('mysystemdesign/plugins/raphael/raphael.min.js')}}"></script> -->
    <!-- <script src="{{asset('mysystemdesign/plugins/morrisjs/morris.js')}}"></script> -->

    <!-- ChartJs -->
    <!-- <script src="{{asset('mysystemdesign/plugins/chartjs/Chart.bundle.js')}}"></script> -->

    <!-- Flot Charts Plugin Js -->
    <!-- <script src="{{asset('mysystemdesign/plugins/flot-charts/jquery.flot.js')}}"></script> -->
    <!-- <script src="{{asset('mysystemdesign/plugins/flot-charts/jquery.flot.resize.js')}}"></script> -->
    <!-- <script src="{{asset('mysystemdesign/plugins/flot-charts/jquery.flot.pie.js')}}"></script> -->
    <!-- <script src="{{asset('mysystemdesign/plugins/flot-charts/jquery.flot.categories.js')}}"></script> -->
    <!-- <script src="{{asset('mysystemdesign/plugins/flot-charts/jquery.flot.time.js')}}"></script> -->

    <!-- Sparkline Chart Plugin Js -->
    <!-- <script src="{{asset('mysystemdesign/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script> -->

    <!-- Custom Js -->
    <script src="{{asset('mysystemdesign/js/admin.js')}}"></script>
    <script src="{{asset('mysystemdesign/js/pages/index.js')}}"></script>

    <!-- Demo Js -->    
    <script src="{{asset('mysystemdesign/js/demo.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>

    <script src="{{asset('js/admin.index.js')}}"></script>

    @section('scripts')
    @show
</body>

</html>
