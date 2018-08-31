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
            <h3 class="text-primary">Add Cars</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('member')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{url('member/cars')}}">Cars</a></li>
                <li class="breadcrumb-item active">Add Cars</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="#" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-cars-owner-name">Car Owner's Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-cars-model" name="cars_owner_name" placeholder="Example : John De Arc">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-cars-model">Cars Model <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-cars-model" name="cars_model" placeholder="Example : Honda">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-cars-type">Cars Type <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-cars-type" name="cars_type" placeholder="Example : Jazz">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-confirm-plat-number">Number plate <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-confirm-plat-number" name="plat_number" placeholder="Example : A089BD">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-stnk-image">Vehicle Registration Rertificate Images <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" id="val-stnk-image" name="stnk_image" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-stnk-image">Information</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" id="val-stnk-image" name="stnk_image" rows="5" placeholder="Tell us about your car" style="min-height:100px"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                                                <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                                                                <span class="css-control-indicator"></span> I agree to the terms
                                                                            </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
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
@stop
