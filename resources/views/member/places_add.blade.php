@extends('member.layouts.app')
@section('style')
<style>
  /* Always set the map height explicitly to define the size of the div
   * element that contains the map. */
  #map {
    height: 300px;
  }
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">

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
                          <form class="form-valide" action="{{url('member/places/add')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type='hidden' name='lat' id='lat'>
                            <input type='hidden' name='lng' id='lng'>
                            <h3>Location</h3>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <label class="col-lg-3 col-form-label" for="val-location">Location Name <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" id="loc_name" class="form-control" name="location_name" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <label class="col-lg-3 col-form-label" for="val-location">Country <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" id="country" class="form-control" name="country" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <label class="col-lg-3 col-form-label" for="val-location">Province <span class="text-danger">*</span></label>
                                <div class="col-lg-4">
                                    <input type="text" id="province" class="form-control" name="province" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <label class="col-lg-3 col-form-label" for="val-location">City <span class="text-danger">*</span></label>
                                <div class="col-lg-4">
                                    <input type="text" id="city" class="form-control" name="city" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <label class="col-lg-3 col-form-label" for="val-location">Location Address <span class="text-danger">*</span></label>
                                <div class="col-lg-8">
                                    <input type="text" id="pac-input" class="form-control" style="margin:10px;width:300px" name="location" placeholder="Search Box" required>
                                    <div id="map"></div>
                                </div>
                            </div>
                            <h3>Rental</h3>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <label class="col-lg-3 col-form-label" for="val-location">Rental Date<span class="text-danger">*</span></label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="daterange" value="01/01/2018 - 01/15/2018" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <label class="col-lg-3 col-form-label" for="val-location">Rental Cost <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" id="ren_cost" class="form-control" name="ren_cost"  placeholder="" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -6.918776, lng: 107.618899},
      zoom: 13,
      mapTypeId: 'roadmap'
    });

    var  marker = new google.maps.Marker(
      {
          map:map,
          draggable:true,
          animation: google.maps.Animation.DROP,
          position: {lat: -6.918776, lng: 107.618899}
      });

      google.maps.event.addListener(marker, 'dragend', function()
      {
          geocodePosition(marker.getPosition());
      });

      function geocodePosition(pos)
      {
         geocoder = new google.maps.Geocoder();
         geocoder.geocode
          ({
              latLng: pos
          },
              function(results, status)
              {
                  if (status == google.maps.GeocoderStatus.OK)
                  {
                      $("#pac-input").val(results[0].formatted_address);
                      $("#mapErrorMsg").hide(100);
                      $('#lat').val(results[0].geometry.location.lat());
                      $('#lng').val(results[0].geometry.location.lng());
                      console.log($('#lat').val());
                      console.log($('#lng').val());
                  }
                  else
                  {
                      $("#mapErrorMsg").html('Cannot determine address at this location.'+status).show(100);
                  }
              }
          );
      }

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
      searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
          marker.setMap(null);
        });
        markers = [];

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

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
            $('#lat').val(places[0].geometry.location.lat());
            $('#lng').val(places[0].geometry.location.lng());
            console.log($('#lat').val());
            console.log($('#lng').val());
        });
        map.fitBounds(bounds);
      });
    $('#pac-input').change(function(){

    });

  }

</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa5j5PXOoThi9oSiADE6wzQLNbstY3Q-g&libraries=places&callback=initAutocomplete"
     async defer></script>
     <script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
@stop
