<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('pageTitle')</title>
    <!-- Custom fonts for this template-->
    <link href="theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="theme/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-default">
    <div class="container">
        @yield('content')
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="theme/vendor/jquery/jquery.min.js"></script>
    <script src="theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="theme/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/theme/js/sb-admin-2.min.js"></script>
</body>

</html>
