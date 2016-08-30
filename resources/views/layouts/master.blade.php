<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    @include('layouts.partials.stylesheet')
</head>

<body>

    <!-- Navigation -->
    @include('layouts.nav')
    <!-- Page Header -->
    @include('layouts.header')

    <!-- Main Content -->
    @yield('content')
    <!-- Footer -->
    @include('layouts.footer')
    <!-- jQuery -->
    @include('layouts.partials.scripts')
</body>

</html>
