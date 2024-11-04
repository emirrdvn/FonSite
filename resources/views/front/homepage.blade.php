@extends('front.layouts.master')
@section('content')
<body id="page-top" style="background-color: #f6f7fb">
  @include('front.widgets.sabitnavbar')
  @include('front.widgets.docksidebar')
  <!-- Page Wrapper -->
  <div id="wrapper" style="margin-left: 77px" >

      
      
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column bg-dark-mode">
          @include('front.widgets.navbar')   
          <!-- Main Content -->
          <div id="content" >

            
          @include('front.widgets.fonbilgi')
      
@endsection

