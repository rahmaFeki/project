<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <title>{{ config('app.name', 'Conges') }}</title>

    <!-- Scripts -->
<script src={{secure_asset("assetsG/js/jquery.js")}}></script>

 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href={{secure_asset("assetsG/plugins/bootstrap/css/bootstrap.min.css")}} />
<link rel="stylesheet" href={{secure_asset("assetsG/css/style.min.css")}}/>
<!-- Core css -->
<link rel="stylesheet" href={{secure_asset("assetsG/css/style.min.css")}}/>
<link rel="stylesheet" href={{secure_asset("assets/css/default.css")}} />

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href={{secure_asset("assetsG/plugins/bootstrap/css/bootstrap.min.css")}} />

<!-- Plugins css -->
<link rel="stylesheet" href={{secure_asset("assetsG/plugins/summernote/dist/summernote.css")}}/>


<link rel="stylesheet" href={{secure_asset("assetsG/plugins/dropify/css/dropify.min.css")}}>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">


 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.js"></script> 

</head>

<body class="font-muli theme-cyan gradient">
 
            @yield('content')
 
<!-- Start Main project js, jQuery, Bootstrap -->
<script src={{secure_asset("assetsG/bundles/lib.vendor.bundle.js")}}></script>

<!-- Start project main js  and page js -->
<script src={{secure_asset("assetsG/js/core.js")}}></script>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src={{secure_asset("assetsG/bundles/lib.vendor.bundle.js")}}></script>

<!-- Start all plugin js -->
<script src={{secure_asset("assetsG/bundles/counterup.bundle.js")}}></script>
<script src={{secure_asset("assetsG/bundles/apexcharts.bundle.js")}}></script>
<script src={{secure_asset("assetsG/bundles/summernote.bundle.js")}}></script>

<!-- Start project main js  and page js -->
<script src={{secure_asset("assetsG/js/core.js")}}></script>
<script src={{secure_asset("assets/js/page/index.js")}}></script>
<script src={{secure_asset("assets/js/page/summernote.js")}}></script>
<!-- Start Main project js, jQuery, Bootstrap -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Start project main js  and page js -->
<script src={{secure_asset("assetsG/js/core.js")}}></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>


<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
})
    
</script>
</body>
</html>
