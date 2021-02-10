@extends('layouts.app')
@section('title', 'Home')
@section('content')
  <div class="row">
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-book"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Books</span>
          <span class="info-box-number">{{ $books }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-success"><i class="fas fa-user"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">User</span>
          <span class="info-box-number">410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Members</span>
          <span class="info-box-number">{{ $members }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@stop
