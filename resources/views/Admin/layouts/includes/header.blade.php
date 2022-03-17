<?php

$title="Goodman-loft";
$name="Dashboard";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}">
  <title><?php echo $title . ' || ' . $name; ?></title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
``<link id="pagestyle" href="{{ asset('/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <!-- include summernote css/js -->
  <link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js defer"></script>
  <!--BEGIN: Multiselect CSS-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>

  <!-- END: Multiselect CSS-->
  <!---sweetalerts----->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
