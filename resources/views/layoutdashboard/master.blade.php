<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Blogs :: Project Dashboard</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('dashboard/plugins/bootstrap/css/bootstrap.min.css')}}" />


<!-- Plugins css -->
<link rel="stylesheet" href="{{asset('dashboard/plugins/charts-c3/c3.min.css')}}"/>

<!-- Core css -->
<link rel="stylesheet" href="{{asset('dashboard/css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('dashboard/css/theme1.css')}}"/>
</head>

<body class="font-montserrat">
	<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div> 
	@yield('content')
	@include('layoutdashboard.footer')
<script src="{{asset('dashboard/bundles/lib.vendor.bundle.js')}}"></script>

<script src="{{asset('dashboard/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('dashboard/bundles/counterup.bundle.js')}}"></script>
<script src="{{asset('dashboard/bundles/knobjs.bundle.js')}}"></script>
<script src="{{asset('dashboard/bundles/c3.bundle.js')}}"></script>

<script src="{{asset('dashboard/js/core.js')}}"></script>
<script src="{{asset('dashboard/js/page/project-index.js')}}"></script>
</body>
</html>