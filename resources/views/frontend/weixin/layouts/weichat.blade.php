<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title', app_name())</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    @yield('meta')
    <!-- Meta -->
    <meta name="description" content="@yield('meta_description','Default Description')">
    <meta name="author" content="@yield('meta_author','EichCD')">
    <!-- Styles -->
    <link href="{{ asset('mskin/weixin/CSS/comm.css') }}?v=130715" rel="stylesheet" type="text/css" />
    @yield('css')
    <!-- JavaScripts -->
    <script src="{{ asset('mskin/weixin/JS/jquery190.js') }}" language="javascript" type="text/javascript"></script>
    @yield('js')
</head>
<body id="loadingPicBlock" fnav="1" class="@yield('bodyClass')">
@yield('content')
@include('frontend.weixin.layouts.footer');
</body>
</html>