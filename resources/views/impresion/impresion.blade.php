<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>INCOS - EL ALTO {{ $titulo }}</title>

    {{--  <link rel="stylesheet" href="{!! asset('/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">  --}}
    {{-- Font Awesome --}}
    {{--  <link rel="stylesheet" href="{!! asset('/adminLTE/bower_components/font-awesome/css/font-awesome.min.css') !!}">  --}}
    {{-- Ionicons --}}
    {{--  <link rel="stylesheet" href="{!! asset('/adminLTE/bower_components/Ionicons/css/ionicons.min.css') !!}">  --}}
    {{-- Theme style --}}
    {{--  <link rel="stylesheet" href="{!! asset('/adminLTE/css/AdminLTE.min.css') !!}">  --}}
    {{--  <link rel="stylesheet" href="{!! asset('/adminLTE/css/skins/skin-green.min.css') !!}">  --}}

    {{-- DataTables --}}
    {{--  <link rel="stylesheet" href="{!! asset('/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}">  --}}
    
    {{--  Otros  --}}
    <link rel="stylesheet" href="{{ asset('css/materialicons.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('css/wkhtml.css') }}" media="all" />

    {{--  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>  --}}
    {{--  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  --}}

    <!-- Google Font -->
    {{--  <link rel="stylesheet"  --}}
        {{--  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  --}}
</head>

<body>
    <div class="page-break">
    <table class="w-100 m-b-15">
        <tr>
            <th class="w-20 text-left no-padding no-margins align-middle">
                <div class="text-center">
                    <img src="{{ asset('images/incos.png') }}" class="w-25">
                </div>
            </th>
            <th class="w-75 align-top">
                <span class="font-semibold uppercase leading-tight text-md" >
                    INSTITUTO TÉCNICO COMERCIAL <br>
                    "INCOS - EL ALTO" <br>
                </span>
                <span class="font-light leading-tight text-md h6">
                    Z/Villa Dolores "F", entre C/8 y B, N°. 300, Telf. 2834933 - 2834918<br>
                    El Alto, La Paz - Bolivia
                </span>
            </th>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
        <tr><td colspan="3"></td></tr>
        <tr><td colspan="3"></td></tr>
        
        <tr>
            <td colspan="3" class="font-bold text-center text-xl uppercase">
                {{ $titulo}}
            </td>
        </tr>
        <tr><td colspan="3"></td></tr>
        <tr><td colspan="3"></td></tr>
        <tr><td colspan="3"></td></tr>
    </table>

    <div class="block">
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
    </div>
</body>
</html>