<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Udema a modern educational site template">
<meta name="author" content="Ansonika">

<!-- SPECIFIC META -->
@yield('extra-mata')

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Faculté des Science et Techniques | Université Marien Ngouabi') }}</title>

<!-- Favicons-->
<link rel="shortcut icon" href="{{ asset("site/img/fst.png") }}" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset("site/img/apple-touch-icon-57x57-precomposed.png") }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset("site/img/apple-touch-icon-72x72-precomposed.png") }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset("site/img/apple-touch-icon-114x114-precomposed.png") }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset("site/img/apple-touch-icon-144x144-precomposed.png") }}">

<!-- BASE CSS -->
<link href="{{ asset("site/css/bootstrap.min.css") }}" rel="stylesheet">
<link href="{{ asset("site/css/style.css") }}" rel="stylesheet">
<link href="{{ asset("site/css/vendors.css") }}" rel="stylesheet">
<link href="{{ asset("site/css/icon_fonts/css/all_icons.min.css") }}" rel="stylesheet">

<!-- YOUR CUSTOM CSS -->
<link href="{{ asset("site/css/custom.css") }}" rel="stylesheet">

<!-- SPECIFIC STYLE -->
@yield('extra-style')

<!-- COMMON SCRIPTS -->
<script src="{{ asset("site/js/jquery-2.2.4.min.js") }}" defer></script>
<script src="{{ asset("site/js/common_scripts.js") }}" defer></script>
<script src="{{ asset("site/js/main.js") }}" defer></script>
<script src="{{ asset("site/assets/validate.js") }}" defer></script>

<!-- SPECIFIC SCRIPTS -->
@yield('extra-script')
