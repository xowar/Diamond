<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diamond</title>


    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">


    <link href="{{ asset('/vendor/bootstrap/css/jquery-ui.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Diamond</a>
            </div>
            <!-- /.navbar-header -->



            <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <!--<li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>-->
                    @else
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>-->
                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endif
                </ul>

            @if (Auth::guest())

            @else
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="{{ url('/') }}"><i class="fa fa-laptop fa-fw"></i> HOME </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-home fa-fw"></i> PROPIEDADES <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{URL::to('home/register_property', array(Auth::user()->puesto))}}">Registro de Propiedades </a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('/home/table_propiedades', array(Auth::user()->puesto))}}">Datos de Propiedades </a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('/home/property_delete', array(Auth::user()->puesto))}}">Propiedades Eliminadas</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('/home/table_renovar_propiedad', array(Auth::user()->puesto))}}">Renovar Propiedades</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i> RECURSOS HUMANOS <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('home/register_users', array(Auth::user()->puesto)) }}">Crear Empleado</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/table_users', array(Auth::user()->puesto)) }}">Datos Empleado</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/table_users_delete', array(Auth::user()->puesto)) }}">Empleados Eliminados</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/table_users_renew', array(Auth::user()->puesto)) }}">Renovación de documentos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-keyboard-o fa-fw"></i> ADMINISTRADOR <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('home/admin_table_users', array(Auth::user()->puesto)) }}">Crear Cuenta</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/agregar_info', array(Auth::user()->puesto)) }}">Agregar Información</a>
                                    </li>
                                </ul>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-money fa-fw"></i> VENTAS <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('home/filtro_propiedad_venta', array(Auth::user()->puesto)) }}">Filtrar Propiedades</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-institution fa-fw"></i> MODULOS <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('home/modulos/prospecto', array(Auth::user()->puesto)) }}">Prospectos</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/modulos/visitas', array(Auth::user()->puesto)) }}">Visitas</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/modulos/table_prospecto', array(Auth::user()->id)) }}">Datos de Prospecto</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-legal fa-fw"></i> MKT <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('home/mkt/agregar_proyecto')}}">Agregar Proyecto</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/mkt/agregar_negocio')}}">Agregar Negocio</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/mkt/registro_articulo')}}">Agregar Articulo</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/mkt/table_proyectos')}}">Datos Proyectos</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('home/mkt/table_negocios')}}">Datos Negocios</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-file-text-o fa-fw"></i> REPORTES EXCEL <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('home/reportes_excel') }}">Descargas</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
            @endif
            
        </nav>

    @yield('content')


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/vendor/newtable/jQuery-2.2.4/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('/vendor/jquery/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/dist/js/sb-admin-2.js') }}"></script>

    <script src="{{ asset('/vendor/newtable/DataTables-1.10.15/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>





    <script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
        });
    });
     $(document).ready(function(){
        $("#btnHidde1").click(function () {
            $("#elementHidde1").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });

        $("#btnHidde2").click(function () {
            $("#elementHidde2").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });

        $("#btnHidde3").click(function () {
            $("#elementHidde3").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });

        $("#btnHidde4").click(function () {
            $("#elementHidde4").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });

        $("#btnHidde5").click(function () {
            $("#elementHidde5").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });

        $("#btnHidde6").click(function () {
            $("#elementHidde6").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });

        $("#btnHidde7").click(function () {
            $("#elementHidde7").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });

        $("#btnHidde8").click(function () {
            $("#elementHidde8").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });
        $("#btnHidde9").click(function () {
            $("#elementHidde9").each(function() {
                displaying = $(this).css("display");
                if(displaying == "block") {
                    $(this).fadeOut('slow',function() {
                        $(this).css("display","none");
                    });
                } else {
                    $(this).fadeIn('slow',function() {
                        $(this).css("display","block");
                    });
                }
            });
        });

        $("#save").click(function () {
            $("#elementHidde1").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
            $("#elementHidde2").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
            $("#elementHidde3").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
            $("#elementHidde4").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
            $("#elementHidde5").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
            $("#elementHidde6").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
            $("#elementHidde7").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
            $("#elementHidde8").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
            $("#elementHidde9").each(function() {
                displaying = $(this).css("display");
                $(this).fadeIn('slow',function() {
                    $(this).css("display","block");
                });
            });
        });
        $("#ine").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Sr'){
               $('#ine1').css('display','');
               $('#ine2').css('display','none');
               document.getElementById("doc_ine1").required  = true;
               document.getElementById("doc_ine2").required = false;
             }
             else if(valorCambiado == 'Sra')
             {
                 $('#ine1').css('display','none');
                 $('#ine2').css('display','');
                document.getElementById("doc_ine1").required = false;
                document.getElementById("doc_ine2").required = true;
             }
             else if(valorCambiado == 'Sr, Sra')
             {
                 $('#ine1').css('display','');
                 $('#ine2').css('display','');
                document.getElementById("doc_ine1").required = true;
                document.getElementById("doc_ine2").required = true;
             }
             else if(valorCambiado == '')
             {
                 $('#ine1').css('display','none');
                 $('#ine2').css('display','none');
                document.getElementById("doc_ine1").required = false;
                document.getElementById("doc_ine2").required = false;
             }
        });
        $("#rfc").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Sr'){
               $('#rfc1').css('display','');
               $('#rfc2').css('display','none');
               document.getElementById("doc_rfc1").required  = true;
               document.getElementById("doc_rfc2").required = false;
             }
             else if(valorCambiado == 'Sra')
             {
                 $('#rfc1').css('display','none');
                 $('#rfc2').css('display','');
                 document.getElementById("doc_rfc1").required  = false;
                document.getElementById("doc_rfc2").required = true;
             }
             else if(valorCambiado == 'Sr, Sra')
             {
                 $('#rfc1').css('display','');
                 $('#rfc2').css('display','');
                 document.getElementById("doc_rfc1").required  = true;
                document.getElementById("doc_rfc2").required = true;
             }
             else if(valorCambiado == '')
             {
                 $('#rfc1').css('display','none');
                 $('#rfc2').css('display','none');
                 document.getElementById("doc_rfc1").required  = false;
                document.getElementById("doc_rfc2").required = false;
             }
        });
        $("#tipo_persona").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Sr'){
               $('#tipo_persona1').css('display','');
               $('#tipo_persona2').css('display','none');
               $('#tipoSr1').css('display','');
               $('#tipoSra1').css('display','none');
               document.getElementById("doc_tipo_persona1").required  = true;
               document.getElementById("doc_tipo_persona2").required = false;
             }
             else if(valorCambiado == 'Sra')
             {
                 $('#tipo_persona1').css('display','none');
                 $('#tipo_persona2').css('display','');
                 $('#tipoSr1').css('display','none');
                 $('#tipoSra1').css('display','');
                 document.getElementById("doc_tipo_persona1").required  = false;
                document.getElementById("doc_tipo_persona2").required = true;
             }
             else if(valorCambiado == 'Sr, Sra')
             {
                 $('#tipo_persona1').css('display','');
                 $('#tipo_persona2').css('display','');
                 $('#tipoSr1').css('display','');
                 $('#tipoSra1').css('display','');
                 document.getElementById("doc_tipo_persona1").required  = true;
               document.getElementById("doc_tipo_persona2").required = true;
             }
             else if(valorCambiado == '')
             {
                 $('#tipo_persona1').css('display','none');
                 $('#tipo_persona2').css('display','none');
                 $('#tipoSr1').css('display','none');
                 $('#tipoSra1').css('display','none');
                 document.getElementById("doc_tipo_persona1").required  = false;
                document.getElementById("doc_tipo_persona2").required = false;
             }
        });
        $("#acta_nacimiento").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Sr'){
               $('#acta_nacimiento1').css('display','');
               $('#acta_nacimiento2').css('display','none');
               document.getElementById("doc_acta_nacimiento1").required  = true;
               document.getElementById("doc_acta_nacimiento2").required = false;
             }
             else if(valorCambiado == 'Sra')
             {
                 $('#acta_nacimiento1').css('display','none');
                 $('#acta_nacimiento2').css('display','');
                 document.getElementById("doc_acta_nacimiento1").required  = false;
                document.getElementById("doc_acta_nacimiento2").required = true;
             }
             else if(valorCambiado == 'Sr, Sra')
             {
                 $('#acta_nacimiento1').css('display','');
                 $('#acta_nacimiento2').css('display','');
                 document.getElementById("doc_acta_nacimiento1").required  = true;
                document.getElementById("doc_acta_nacimiento2").required = true;
             }
             else if(valorCambiado == '')
             {
                 $('#acta_nacimiento1').css('display','none');
                 $('#acta_nacimiento2').css('display','none');
                document.getElementById("doc_acta_nacimiento1").required  = false;
                document.getElementById("doc_acta_nacimiento2").required = false;
             }
        });
        $("#curp").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Sr'){
               $('#curp1').css('display','');
               $('#curp2').css('display','none');
               document.getElementById("doc_curp1").required  = true;
               document.getElementById("doc_curp2").required = false;
             }
             else if(valorCambiado == 'Sra')
             {
                 $('#curp1').css('display','none');
                 $('#curp2').css('display','');
                 document.getElementById("doc_curp1").required  = false;
                document.getElementById("doc_curp2").required = true;
             }
             else if(valorCambiado == 'Sr, Sra')
             {
                 $('#curp1').css('display','');
                 $('#curp2').css('display','');
                 document.getElementById("doc_curp1").required  = true;
                document.getElementById("doc_curp2").required = true;
             }
             else if(valorCambiado == '')
             {
                 $('#curp1').css('display','none');
                 $('#curp2').css('display','none');
                 document.getElementById("doc_curp1").required  = false;
                document.getElementById("doc_curp2").required = false;
             }
        });
        $("#escritura_propiedad").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#escritura_propiedad1').css('display','');
               document.getElementById("doc_escritura").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#escritura_propiedad1').css('display','none');
                 document.getElementById("doc_escritura").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#escritura_propiedad1').css('display','none');
                 document.getElementById("doc_escritura").required = false;
             }
        });
        $("#titulo_propiedad").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado != ''){
               $('#titulo_propiedad1').css('display','');
               document.getElementById("doc_titulo").required = true;
             }
             else
             {
                 $('#titulo_propiedad1').css('display','none');
                 document.getElementById("doc_titulo").required = false;
             }
        });
        $("#registro_propiedad").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
                $('#registro_propiedad1').css('display','');
                document.getElementById("doc_registro").required = true;
             }
             else if(valorCambiado == 'No')
             {
                $('#registro_propiedad1').css('display','none');
                document.getElementById("doc_registro").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#registro_propiedad1').css('display','none');
                 document.getElementById("doc_registro").required = false;
             }
        });
        $("#aviso_privacidad").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#aviso_privacidad1').css('display','');
               document.getElementById("doc_aviso").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#aviso_privacidad1').css('display','none');
                 document.getElementById("doc_aviso").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#aviso_privacidad1').css('display','none');
                 document.getElementById("doc_aviso").required = false;
             }
        });
        $("#recibo_luz").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#recibo_luz1').css('display','');
               document.getElementById("doc_recibo_luz").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#recibo_luz1').css('display','none');
                 document.getElementById("doc_recibo_luz").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#recibo_luz1').css('display','none');
                 document.getElementById("doc_recibo_luz").required = false;
             }
        });
        $("#recibo_agua").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#recibo_agua1').css('display','');
               document.getElementById("doc_recibo_agua").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#recibo_agua1').css('display','none');
                 document.getElementById("doc_recibo_agua").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#recibo_agua1').css('display','none');
                 document.getElementById("doc_recibo_agua").required = false;
             }
        });
        $("#predial").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#predial1').css('display','');
               document.getElementById("doc_predial").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#predial1').css('display','none');
                 document.getElementById("doc_predial").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#predial1').css('display','none');
                 document.getElementById("doc_predial").required = false;
             }
        });
        $("#planos").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#planos1').css('display','');
               document.getElementById("doc_planos").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#planos1').css('display','none');
                 document.getElementById("doc_planos").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#planos1').css('display','none');
                 document.getElementById("doc_planos").required = false;
             }
        });
        $("#regimen_matrimonial").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#regimen_matrimonial1').css('display','');
               document.getElementById("doc_regimen_matrimonial").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#regimen_matrimonial1').css('display','none');
                 document.getElementById("doc_regimen_matrimonial").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#regimen_matrimonial1').css('display','none');
                 document.getElementById("doc_regimen_matrimonial").required = false;
             }
        });
        $("#acta_matrimonio").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#acta_matrimonio1').css('display','');
               document.getElementById("doc_acta_matrimonio").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#acta_matrimonio1').css('display','none');
                 document.getElementById("doc_acta_matrimonio").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#acta_matrimonio1').css('display','none');
                 document.getElementById("doc_acta_matrimonio").required = false;
             }
        });
        $("#regimen_propiedad_condo").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#regimen_propiedad_condo1').css('display','');
               document.getElementById("doc_regimen_propiedad_condo").required = true;
             }
             else if(valorCambiado == 'No')
             {
                 $('#regimen_propiedad_condo1').css('display','none');
                 document.getElementById("doc_regimen_propiedad_condo").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#regimen_propiedad_condo1').css('display','none');
                 document.getElementById("doc_regimen_propiedad_condo").required = false;
             }
        });

        $("#ref_info").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Online')
            {
               $('#online').css('display','');
               document.getElementById("online").required = true;
               $('#offline').css('display','none');
                 document.getElementById("offline").required = false;
             }
             else if(valorCambiado == 'Offline')
             {
                 $('#online').css('display','none');
                 document.getElementById("online").required = false;
                  $('#offline').css('display','');
                document.getElementById("offline").required = true;
             }
             else if(valorCambiado == '')
             {
                 $('#online').css('display','none');
                 document.getElementById("online").required = false;
                 $('#offline').css('display','none');
                 document.getElementById("offline").required = false;
             }
        });


         $("#tipo_pago").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Credito')
            {
               $('#tipo_credito').css('display','');
               document.getElementById("tipo_credito").required = true;
             }
             else if(valorCambiado == 'Efectivo')
             {
                 $('#tipo_credito').css('display','none');
                 document.getElementById("tipo_credito").required = false;
             }
             else if(valorCambiado == '')
             {
                 $('#tipo_credito').css('display','none');
                 document.getElementById("tipo_credito").required = false;
             }
        });
    });

    </script>
    <script>
        $( function() {
            $( "#date1" ).datepicker({ dateFormat: 'dd-mm-yy' });
        } );
        $( function() {
            $( "#date2" ).datepicker({ dateFormat: 'dd-mm-yy' });
        } );
        $( function() {
            $( "#date3" ).datepicker({ dateFormat: 'dd-mm-yy' });
        } );
        $( function() {
            $( "#date4" ).datepicker({ dateFormat: 'yy-mm-dd' });
        } );
        $( function() {
            $( "#date5" ).datepicker({ dateFormat: 'yy-mm-dd' });
        } );
    </script>


<script type="text/javascript">
    
    function showContent1() {
        element = document.getElementById("ineSr1");
        check = document.getElementById("ineSr");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function showContent2() {
        element = document.getElementById("ineSra1");
        check = document.getElementById("ineSra");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function showContent3() {
        element = document.getElementById("rfcSr1");
        check = document.getElementById("rfcSr");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function showContent4() {
        element = document.getElementById("rfcSra1");
        check = document.getElementById("rfcSra");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function showContent5() {
        element = document.getElementById("tipoSr1");
        element2 = document.getElementById("tipoSr2");
        check = document.getElementById("tipoSr");
        if (check.checked) {
            element.style.display='block';
            element2.style.display='block';
        }
        else {
            element.style.display='none';
            element2.style.display='none';
        }
    }
    function showContent6() {
        element = document.getElementById("tipoSra1");
        element2 = document.getElementById("tipoSra2");
        check = document.getElementById("tipoSra");
        if (check.checked) {
            element.style.display='block';
            element2.style.display='block';
        }
        else {
            element.style.display='none';
            element2.style.display='none';
        }
    }
    function showContent7() {
        element = document.getElementById("actaSr1");
        check = document.getElementById("actaSr");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function showContent8() {
        element = document.getElementById("actaSra1");
        check = document.getElementById("actaSra");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function showContent9() {
        element = document.getElementById("curpSr1");
        check = document.getElementById("curpSr");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function showContent10() {
        element = document.getElementById("curpSra1");
        check = document.getElementById("curpSra");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function limpiar() {
        document.getElementById("resultado").value = "";
    }

    function only_num(e){
        tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }
            
        // Patron de entrada, en este caso solo acepta numeros
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
    function validarFecha(obj) {
        patron = /^\d{2}\-\d{2}\-\d{4}$/
            if (!patron.test(obj.value)) {
                document.getElementById("fecha_nacimiento").value = "DD-MM-YYYY";
                alert('Error: Formato incorrecto');
        } 
    }

    function soloLetras(e){
         key = e.keyCode || e.which;
         tecla = String.fromCharCode(key).toLowerCase();
         letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
         especiales = [8,37,39,46];

         tecla_especial = false
         for(var i in especiales){
             if(key == especiales[i]){
          tecla_especial = true;
          break;
                    } 
         }
         
        if(letras.indexOf(tecla)==-1 && !tecla_especial)
             return false;
        }
</script>

<script language="JavaScript">
<!--
/* Determinamos el tiempo total en segundos */
var totalTiempo=1800;

var timestampStart = new Date().getTime();
var endTime=timestampStart+(totalTiempo*1000);
var timestampEnd=endTime-new Date().getTime();

/* Variable que contiene el tiempo restante */
var tiempRestante=totalTiempo;

/* Ejecutamos la funcion updateReloj() al cargar la pagina */
//updateReloj();

function updateReloj() {
    var Seconds=tiempRestante;
    
    var Days = Math.floor(Seconds / 86400);
    Seconds -= Days * 86400;

    var Hours = Math.floor(Seconds / 3600);
    Seconds -= Hours * (3600);

    var Minutes = Math.floor(Seconds / 60);
    Seconds -= Minutes * (60);

    var TimeStr = ((Days > 0) ? Days + " dias " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds);
    /* Este muestra el total de hora, aunque sea superior a 24 horas */
    //var TimeStr = LeadingZero(Hours+(Days*24)) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds);

    document.getElementById('CuentaAtras').innerHTML = TimeStr;

    if(endTime <=new Date().getTime())
    {
        document.getElementById('CuentaAtras').innerHTML = "00:00:00";
        setTimeout(function(){mostrarAviso()},1000);
    }else{
        /* Restamos un segundo al tiempo restante */
        tiempRestante-=1;
        /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
        setTimeout("updateReloj()",1000);
    }

}
function mostrarAviso(){  
    alert("HAN PASADO LOS 30 MINUTOS");
}

/* Funcion que pone un 0 delante de un valor si es necesario */
function LeadingZero(Time) {
    return (Time < 10) ? "0" + Time : + Time;
}
//-->


    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }


    

</script>

</body>

</html>
