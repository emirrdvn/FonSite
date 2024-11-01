@extends('front.layouts.master')
@section('content')
<body id="page-top">
  @include('front.widgets.sabitnavbar')
  @include('front.widgets.docksidebar')
  <!-- Page Wrapper -->
  <div id="wrapper">

      
      
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column bg-dark-mode">

          <!-- Main Content -->
          <div id="content">

          @include('front.widgets.navbar')     
          @include('front.widgets.fonbilgi')
      
@endsection

