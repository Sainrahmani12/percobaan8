<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard - Admin</title>
  <!-- Favicon -->
  <link rel="icon" href="admin/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <!-- <link rel="stylesheet" href="admin/assets/vendor/nucleo/css/nucleo.css" type="text/css"> -->
  <link rel="stylesheet" href="admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="admin/assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <script src="admin/assets/js/highcharts.js"></script>

    @include('sidebar')
    <div class="main-content" id="panel">
    @include('navbar')
    <div class="header bg-primary pb-6">

    @yield('content')
    </div>
    <div class="container-fluid">
    </div>
    @include('footer')
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="admin/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="admin/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="admin/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="admin/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="admin/assets/js/argon.js?v=1.2.0"></script>
        <script src="admin/assets/js/argon.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>