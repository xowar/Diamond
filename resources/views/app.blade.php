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
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
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
                                <a href="#"><i class="fa fa-home fa-fw"></i> DATOS DE PROPIEDAD</a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('/home/register_property') }}">Registro de Propiedades</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/home/table_propiedades') }}">Datos de Propiedades</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/home/property_delete') }}">Propiedades Eliminadas</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i> DATOS DE EMPLEADOS</a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('home/register_users') }}">Crear Empleado</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('home/table_users') }}">Datos Empleado</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('home/table_users_delete') }}">Empleados Eliminados</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-keyboard-o fa-fw"></i> ADMINISTRADOR</a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ url('home/admin_table_users') }}">Crear Cuenta</a>
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
        });
        $("#escritura_propiedad").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#escritura_propiedad1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#escritura_propiedad1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#escritura_propiedad1').css('display','none');
             }
        });
        $("#titulo_propiedad").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado != ''){
               $('#titulo_propiedad1').css('display','');
             }
             else
             {
                 $('#titulo_propiedad1').css('display','none');
             }
        });
        $("#registro_propiedad").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
                $('#registro_propiedad1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                $('#registro_propiedad1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#registro_propiedad1').css('display','none');
             }
        });
        $("#aviso_privacidad").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#aviso_privacidad1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#aviso_privacidad1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#aviso_privacidad1').css('display','none');
             }
        });
        $("#recibo_luz").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#recibo_luz1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#recibo_luz1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#recibo_luz1').css('display','none');
             }
        });
        $("#recibo_agua").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#recibo_agua1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#recibo_agua1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#recibo_agua1').css('display','none');
             }
        });
        $("#predial").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#predial1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#predial1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#predial1').css('display','none');
             }
        });
        $("#planos").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#planos1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#planos1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#planos1').css('display','none');
             }
        });
        $("#regimen_matrimonial").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#regimen_matrimonial1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#regimen_matrimonial1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#regimen_matrimonial1').css('display','none');
             }
        });
        $("#acta_matrimonio").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#acta_matrimonio1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#acta_matrimonio1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#acta_matrimonio1').css('display','none');
             }
        });
        $("#regimen_propiedad_condo").change(function () {
                var valorCambiado =$(this).val();
            if(valorCambiado == 'Si'){
               $('#regimen_propiedad_condo1').css('display','');
             }
             else if(valorCambiado == 'No')
             {
                 $('#regimen_propiedad_condo1').css('display','none');
             }
             else if(valorCambiado == '')
             {
                 $('#regimen_propiedad_condo1').css('display','none');
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

</script>

</body>

</html>
