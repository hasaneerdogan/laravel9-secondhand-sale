<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('assets')}}/adminasset/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/adminasset/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="{{asset('assets')}}/adminasset/css/style.css">

    <link rel="shortcut icon" href="{{asset('assets')}}/adminasset/images/favicon.png" />
</head>
<body>

<div class="container-scroller">
    @include('MyAdmin.sidebar')
    @include('MyAdmin.header')

    @yield('content')
    @show
    @include('MyAdmin.footer')

</div>
</body>
</html>
