<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Epic :: Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href={{asset("assetsG/plugins/bootstrap/css/bootstrap.min.css")}} />

<!-- Core css -->
<link rel="stylesheet" href={{asset("assetsG/css/style.min.css")}}/>
<link rel="stylesheet" href={{asset("assets/css/default.css")}} />

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href={{asset("assetsG/plugins/bootstrap/css/bootstrap.min.css")}} />

<!-- Plugins css -->
<link rel="stylesheet" href={{asset("assetsG/plugins/summernote/dist/summernote.css")}}/>



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
<script src={{asset("assetsG/js/jquery.js")}}></script>
</head>

<body >
	@yield('contenu')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$( "#loginForm" ).on('submit',function( e) {
	
	e.preventDefault();
	$.post( $(this).attr('action'), {username:$('#username').val(),password: $('#password').val()},function(result){
		var res=JSON.parse(result)
		localStorage.setItem('token',res.token)
		
	})
})

</script>
<!-- Start Main project js, jQuery, Bootstrap -->
<script src={{asset("assetsG/bundles/lib.vendor.bundle.js")}}></script>

<!-- Start project main js  and page js -->
<script src={{asset("assetsG/js/core.js")}}></script>
<!-- Start Main project js, jQuery, Bootstrap -->
<script src={{asset("assetsG/bundles/lib.vendor.bundle.js")}}></script>

<!-- Start all plugin js -->
<script src={{asset("assetsG/bundles/counterup.bundle.js")}}></script>
<script src={{asset("assetsG/bundles/apexcharts.bundle.js")}}></script>
<script src={{asset("assetsG/bundles/summernote.bundle.js")}}></script>

<!-- Start project main js  and page js -->
<script src={{asset("assetsG/js/core.js")}}></script>
<script src={{asset("assetsG/js/page/index.js")}}></script>
<script src={{asset("assetsG/js/page/summernote.js")}}></script>
<!-- Start Main project js, jQuery, Bootstrap -->
<script src={{asset("assetsG/bundles/lib.vendor.bundle.js")}}></script>

<!-- Start project main js  and page js -->
<script src={{asset("assetsG/js/core.js")}}></script>
</body>
</html>
