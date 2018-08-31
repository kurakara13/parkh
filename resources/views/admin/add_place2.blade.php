@extends('admin.layouts.app')
@section('style')
<style>
  /* Always set the map height explicitly to define the size of the div
   * element that contains the map. */
  #map {
    height: 100%;
  }
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
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
                <li class="breadcrumb-item active"><a href="{{url('admin/places')}}">Place</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
                          <form class="form-valide" action="{{url('admin/places/add')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type='hidden' name='lat' id='lat'>
                            <input type='hidden' name='lng' id='lng'>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-location">Location <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" id="pac-input" class="form-control" name="location" type="text" placeholder="Search Box">
                                </div>
                            </div>
                            <button type="submit">Submit</butto>
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
<script>

  function initAutocomplete() {

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
        var icon = {
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(25, 25)
        };


        if (place.geometry.viewport) {
            // Only geocodes have viewport.
            bounds.union(place.geometry.viewport);
        } else {
            bounds.extend(place.geometry.location);
        }
        console.log(places[0].geometry.location);
    });
    });
    $('#pac-input').change(function(){

    });

  }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ0lAiBHA-SlX5Gcbo7lpxngcsdl4av3M&libraries=places&callback=initAutocomplete"
     async defer></script>
@stop
