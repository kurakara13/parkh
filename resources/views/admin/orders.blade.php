@extends('admin.layouts.app')
@section('style')
<style>
.m-t-40 {
    margin-top: 0px!important;
}
</style>
@stop
@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Orders</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Orders</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                      <img src="{{asset('images/orderlist.png')}}" width="100" height="100">
                        <h4 style="padding-left:30px;">All List Orders </h4>
                        <div class="add-cars" style="float:right;margin:40px;margin-right:0px">
                          <button type="button" class="btn btn-info">+ Add Orders</button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                      <div class="table-responsive m-t-40">
                          <table id="myTable" class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                      <th>Date</th>
                                      <th>Name</th>
                                      <th>Cars</th>
                                      <th>Location</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Tiger Nixon</td>
                                      <td>Tiger Nixon</td>
                                      <td>Tiger Nixon</td>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>
                                        <button class="btn btn-warning"><i class="fa fa-thumbs-o-up"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-thumbs-o-down"></i></button>
                                        <button class="btn btn-info"><i class="fa fa-search"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Tiger Nixon</td>
                                      <td>Tiger Nixon</td>
                                      <td>Tiger Nixon</td>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>
                                        <button class="btn btn-warning"><i class="fa fa-thumbs-o-up"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-thumbs-o-down"></i></button>
                                        <button class="btn btn-info"><i class="fa fa-search"></i></button>
                                      </td>
                                  </tr>
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
<script src="{{asset('assets-member/js/lib/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets-member/js/lib/datatables/datatables-init.js')}}"></script>
<style>
.table-bordered td, .table-bordered th {
    border: none;
}
.table > thead > tr > th {
    border-bottom: 1px solid #e7e7e7;
    font-weight: 600;
    text-align: center;
}
.table-bordered {
    border: none;
}
tbody tr td:last-child {
    text-align: center;
    background-color: white;
}

tbody tr td{
    background-color: white;
}

.table{
  margin-top: 10px;
  margin-bottom: 20px;
}
</style>
@stop
