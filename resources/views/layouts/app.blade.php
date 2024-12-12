<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    

    @include('includes.style')

</head>

<body>
    @include('includes.navbar')


    @yield('content')

    @stack('add-footer')
    @stack('no-footer')
    {{-- @include('includes.footer') --}}

    <!-- === SCRIPT === -->
    
    @include('includes.script');
    

</body>

</html>