@extends('admin.layouts.app')
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
#map {
 height: 400px;
 width: 100%;
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
                <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{url('admin/places')}}">Cars</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="media" style="padding:20px">
                      <h3>Parkher Location Marker</h3>
                      <div id="map"></div>
                        <!-- <div class="media-left meida media-middle">
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
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- background:none;border-radius:50%;box-shadow: 1px 1px 1px 1px;padding:10px;border-color:blue -->
            <div class="col-md-5">
                <div class="card">
                    <div class="media" style="max-height:478px;height:478px;padding:20px">
                      <div class="head" style="display:-webkit-box;">
                        <h3>Location List</h3>
                        <a href="{{url('admin/places/add')}}" class="btn btn-primary" style="margin-left: 130px;">Add Location</a>
                      </div>
                      <hr>
                      <div class="scroll" style="overflow-y:scroll;;height:378px;">
                        <div class="row">
                          <div class="col-sm-2" style="padding:10px">
                            <a href="#" class="form-control btn btn-info"><i class="fa fa-search"></i></a>
                          </div>
                          <div class="col-sm-10">
                            <h3>Location 1</h3>
                            <div class="progress">
                              <div class="progress-bar bg-info wow animated progress-animated" style="width: 90%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                          </div>
                          <div class="col-sm-2" style="padding:10px">
                            <a href="#" class="form-control btn btn-info"><i class="fa fa-search"></i></a>
                          </div>
                          <div class="col-sm-10">
                            <h3>Location 2</h3>
                            <div class="progress">
                              <div class="progress-bar bg-info wow animated progress-animated" style="width: 90%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <a href="{{url('admin/places/add')}}" class="form-control" style="width: 100%;height: 374px;background: #62d1f3;">
                          <i class="fa fa-plus" style="font-size:100px;color:white;padding:35%"></i>
                        </a> -->
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
<script>

  function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: {lat: -6.918776, lng: 107.618899}
    });

    // Create an array of alphabetical characters used to label the markers.
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Add some markers to the map.
    // Note: The code uses the JavaScript Array.prototype.map() method to
    // create an array of markers based on a given "locations" array.
    // The map() method here has nothing to do with the Google Maps API.
    var markers = locations.map(function(location, i) {
      return new google.maps.Marker({
        position: location,
        label: labels[i % labels.length]
      });
    });

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers,
        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
  }
  var locations = [
    {lat: -6.935120, lng: 107.591937},
    {lat: -6.934475, lng: 107.591776}
  ]
</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ0lAiBHA-SlX5Gcbo7lpxngcsdl4av3M&callback=initMap">
</script>
@stop
