

<!-- Title -->
<title>@yield("title")</title>

<!-- Stylesheets --- {{URL::asset('assets/')}}  -->
<link href="{{URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/responsive.css')}}" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="{{URL::asset('assets/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{URL::asset('assets/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{URL::asset('assets/images/favicon.png')}}" type="image/x-icon">

@yield('css')
