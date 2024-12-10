<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link data-n-head="ssr" rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		@if(isset($page) && isset($page->metatitle))
		{{ $page->metatitle }}
		@else
		@foreach ($siteinfo as $si)
		{{ $si->site_title }}
		@endforeach
		@endif
	</title>
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
	<favicon-component></favicon-component>
</head>

<body>
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
	<div class="body-wrapper">
		<div id="app">
			@include('/website/components/header')
			<main class="bg-white"  style="min-height:200px;">
				@yield('page-content')
			</main>
			@include('/website/components/footer')
		</div>
	</div>
	<!-- Body main wrapper end -->
	@stack('scripts')

    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>


    <script>
        function checkIframe(counter) {
            $('.map-div').addClass('d-none')
            $(`.map${counter}`).removeClass('d-none')
        }
    </script>
</body>

</html>
