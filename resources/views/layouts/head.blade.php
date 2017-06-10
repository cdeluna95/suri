@section('head')
<!-- Required -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- SEO -->
<title>@yield('title')</title>
<meta name="title" content="@yield('meta-title')">
<meta name="description" content="@yield('meta-desc')">
<meta name="keywords" content="@yield('meta-key')">
<!-- Favicon -->
<link href="{{{ asset('images/favicon.png') }}}" rel="shortcut icon">
<!-- Styles -->
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<!-- Scripts -->
<script>window.Laravel = { csrfToken: '{{ csrf_token() }}' };</script>
@endsection
