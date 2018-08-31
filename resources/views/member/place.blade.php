@extends('member.layouts.app')
@section('style')
<style>
.media{
  display: block;
}

.media img{
  width: 100%;
  height: 200px;
}

.card{
  padding: 0px;
}

.add-place{
  background: #62d1f3;
  margin: 15px 0;
  height: 373px;
  width: 100%;
  border: none;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
  color: #62d1f3;
  font-size: 65px;
}

.img-circle {
    border-radius: 100%;
    width: 35%;
    background: white;
    margin-left: 30%;
}
</style>
@stop
@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <img src="{{asset('images/parkir1.jpg')}}">
                        </div>
                        <div class="media-body p-30">
                            <h2>Tempat Parkir 1</h2>
                            <div class="progress">
                              <div class="progress-bar bg-info wow animated progress-animated" style="width: 90%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                            <hr>
                            <div class="space" style="display:flex">
                              <p class="media-text-left">Free Space 2 Space</p>
                              <p class="media-text-right"> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn add-place" onclick="window.location.href='place/add'">
                <div class="img-circle">
                  <i class="fa fa-plus"></i>
                </div>
              </button>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
    <!-- End footer -->
</div>
@stop
@section('script')
<!-- Amchart -->
 <script src="{{asset('assets-member/js/lib/morris-chart/raphael-min.js')}}"></script>
<script src="{{asset('assets-member/js/lib/morris-chart/morris.js')}}"></script>
<script src="{{asset('assets-member/js/lib/morris-chart/dashboard1-init.js')}}"></script>

@stop
