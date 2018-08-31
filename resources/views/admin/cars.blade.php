@extends('admin.layouts.app')
@section('css')
<style>
.footer{
    bottom:0;
}
</style>
@stop
@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Cars</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active">Cars</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
              @if(session()->has('message'))
                  <div class="alert alert-success" style="color:white">
                      {{ session()->get('message') }}
                  </div>
              @endif
                <div class="card">
                    <div class="card-title">
                      <img src="{{asset('images/cars.jpg')}}" width="100" height="100">
                        <h4 style="padding-left:30px;">All Cars </h4>
                        <div class="add-cars" style="float:right;margin:40px;margin-right:0px">
                          <a href="{{url('admin/cars/add')}}"><button type="button" class="btn btn-info">+ Add Cars</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Plat Number</th>
                                        <th  style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $i=1; ?>
                                  @foreach($car as $cars)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td>{{$cars->owner_cars_name}}</td>
                                        @if($cars->status == 'Non Active')
                                        <td><span class="badge badge-warning" style="color:white">{{$cars->status}}</span></td>
                                        @else
                                        <td><span class="badge badge-info">{{$cars->status}}</span></td>
                                        @endif
                                        <td>{{$cars->created_at}}</td>
                                        <td class="color-primary">{{$cars->cars_number}}</td>
                                        <td style="text-align:center">
                                          <button class="btn btn-warning"><i class="fa fa-thumbs-o-up"></i></button>
                                          <button class="btn btn-danger"><i class="fa fa-thumbs-o-down"></i></button>
                                          <button class="btn btn-info"><i class="fa fa-search"></i></button>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
    <!-- End footer -->
</div>
@stop

@section('script')
@stop
