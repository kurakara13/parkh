@extends('member.layouts.app')
@section('style')
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
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
                <div class="card">
                    <div class="card-title">
                      <img src="{{asset('images/cars.jpg')}}" width="100" height="100">
                        <h4 style="padding-left:30px;">Yours Cars </h4>
                        <div class="add-cars" style="float:right;margin:40px;margin-right:0px">
                          <a href="{{url('member/cars/add')}}"><button type="button" class="btn btn-info">+ Add Cars</button></a>
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
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Kolor Tea Shirt For Man</td>
                                        <td><span class="badge badge-info">Active</span></td>
                                        <td>January 22</td>
                                        <td class="color-primary">$21.56</td>
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
@stop
