<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>COMPRAS | GRUPO GUMA </title>
    <link rel="shortcut icon" href="{{ url('img/ic-guma.png') }}" />


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <script src="{{ asset('js/template/config.js') }}"></script>
    <script src="{{ asset('js/template/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
    <link href="{{ asset('js/template/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/plyr/plyr.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/leaflet/leaflet.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/fullcalendar/main.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('js/template/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('js/template/vendors/choices/choices.min.css') }}" rel="stylesheet" >
    
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    
    
</head>
<body>


    <div id="app">
        @yield('content')
    </div>


    <script src="{{ asset('js/template/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/glightbox/glightbox.min.js') }}"></script>    
    <script src="{{ asset('js/template/flatpickr.js') }}"></script>
    <script src="{{ asset('js/template/vendors/echarts/echarts.min.js') }}"></script>    
    <script src="{{ asset('js/template/world.js') }}"></script>
    <script src="{{ asset('js/template/vendors/plyr/plyr.polyfilled.min.js') }}"></script>    
    <script src="{{ asset('js/template/vendors/countup/countUp.umd.js') }}"></script>    
    <script src="{{ asset('js/template/vendors/chart/chart.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('js/template/vendors/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('js/template/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/fullcalendar/main.min.js') }}" ></script>
    <script src="{{ asset('js/template/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('js/template/vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('js/template/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('js/template/theme.js') }}"></script>
    <script src="{{ asset('js/template/vendors/choices/choices.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es.min.js"></script>
    <script src="{{ asset('js/Numeral.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>    
    <script src="{{ asset('js/jszip.js') }}"></script>
    <script src="{{ asset('js/xlsx.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    @yield('metodosjs')
    <script src="{{ asset('js/Funciones.js') }}"></script>
    



    


    
</body>

</html>