<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FlexStart Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="plugin/img/favicon.png" rel="icon">
  <link href="plugin/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="plugin/vendor/aos/aos.css" rel="stylesheet">
  <link href="plugin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="plugin/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="plugin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="plugin/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="plugin/css/style.css" rel="stylesheet">
</head>

<body>

@include('landing.layouts.includes.navbar')
<main id="main">
   @yield('content')
</main>

@include('landing.layouts.includes.footer')




</body>

</html>