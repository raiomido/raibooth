<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Rai Omido">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <title>{{$pageTitle ?? $naturalPageTitle}}</title>
    <meta name="description" content="{{$pageDescription ?? $naturalPageDescription}}">
    <meta name="keywords" content="{{$pageKeywords ?? $naturalPageKeywords}}">
    <link rel="canonical" href="{{url()->full()}}" />
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!--Social Meta-->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$pageTitle ?? $naturalPageTitle}}">
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:site_name" content="Raibooth">
    <meta property="og:description" content="{{$pageDescription ?? $naturalPageDescription}}">
    <meta property="og:image" content="{{$pageOgImage ?? $naturalOgImage}}">
    @isset($publishedTime)
    <meta property="article:published_time" content="{{$publishedTime}}" />
    @endisset
    <meta property="article:author" content="Rai Omido" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@raiomido">
    <meta name="twitter:creator" content="@raiomido">
    <meta name="twitter:title" content="{{$pageTitle ?? $naturalPageTitle}}">
    <meta name="twitter:description" content="{{$pageDescription ?? $naturalPageDescription}}">
    <meta name="twitter:image" content="{{$pageOgImage ?? $naturalOgImage}}">
    <meta name="twitter:image:alt" content="{{$pageOgImageAlt ?? $naturalOgImageAlt}}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
</head>
<body>
    @yield('content')
</body>
</html>
