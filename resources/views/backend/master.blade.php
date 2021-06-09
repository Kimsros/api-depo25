<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Met Touminh">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{config('app.name')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/backend//backend/assets/img/favicon.png">

    <link rel="shortcut icon" href="/backend/assets/img/favicon.png">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    
    <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
    <link rel="stylesheet" href="/backend/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/backend/assets/fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="/backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
    <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->
    
    <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
    <link rel="stylesheet" href="/backend/assets/plugins/apex/apexcharts.css">
    <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

    <!-- ======= MAIN STYLES ======= -->
    <link rel="stylesheet" href="/backend/assets/css/style.css">
</head>
<body>
    <div id="app">
        <app-backend></app-backend>
    </div>
    
    <script src="/backend/assets/js/jquery.min.js"></script>
   <script src="/backend/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="/backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <script src="/backend/assets/js/script.js"></script>
   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

   <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
   <script src="/backend/assets/plugins/apex/apexcharts.min.js"></script>
   <script src="/backend/assets/plugins/apex/custom-apexcharts.js"></script>
   <script src="{{ asset("js/app.js") }}" defer></script>
</body>
</html>