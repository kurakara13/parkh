@extends('layouts.app_all')
@section('style')
<link type="text/css" rel="stylesheet" href="{{asset('css/ion.rangeSlider.skinHTML5.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/ion.rangeSlider.css')}}" />
<style>
#home {
    height: 44vh;
}

/* card */
.card{
  display: flex;
  margin: 20px;
  box-shadow: 0px 1px 1px 1px;
}

.card img{
  margin-right: 20px;
}

.card-img-top{
  width: 259px;
  height: 252px;
}

.card .card-body{
  /* padding: 10px; */
}

.pl15{
  padding: 20px;
}

.btn-filter{
      height: 45px;
      width:20%;
      margin: 18px;
      float: left;
}

.items__info-title {
    display: inline-block;
    vertical-align: top;
    padding-left: 14px;
}

.items__info-title h4.long-title {
    margin-top: 12px;
    margin-bottom: 14px;
    font-family: 'Open Sans',sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #248fc6!important;
    max-height: 55px;
    overflow: hidden;
    text-overflow: ellipsis;
    position: relative;
    -webkit-line-clamp: 2;
}

.items__info .items__created-time, .items__info address {
    display: inline-block;
    vertical-align: top;
    color: #888;
    font-size: 11px;
    font-weight: 100;
    margin: 0 0 14px;
}

address ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline;
    font-size: 12px;
    font-weight: 600;
    font-family: 'Open Sans',sans-serif;
    color: rgba(0,0,0,.75);
}

address ul li {
    display: inline;
}

address {
    width: 100%;
    overflow: hidden;
    height: 16px;
}

address, blockquote .small, blockquote footer, blockquote small, dd, dt, pre {
    line-height: 1.42857143;
}

.property-attribute-list-view {
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline-table;
}

.property-attribute-list-view>li.attribute_item {
    margin-right: 0;
    width: 50%;
    color: rgba(0,0,0,.54);
    margin-bottom: 7px;
    letter-spacing: .41px;
    font-family: 'Open Sans',sans-serif;
    font-size: 12px;
}

.property-attribute-list-view li {
    display: inline-block;
    vertical-align: top;
    font-size: .9em;
    margin-right: 3px;
    width: 23%;
}

.items_bulk_info .btn__favorite {
    font-size: 2em;
    color: #be1e2d;
    margin-top: -13px;
    z-index: 2;
    text-align: center;
    width: 15px;
    height: 15px;
}

.fa-stack {
    position: relative;
    width: 2em;
    height: 2em;
    line-height: normal;
    vertical-align: middle;
}

.items_bulk_info .checkbox-add-bulk {
    width: 20px;
    display: inline-block;
}

.items_bulk_info .checkbox-add-bulk input[type=checkbox] {
    visibility: hidden;
}

input[type=radio], input[type=checkbox] {
    margin: 2px 0 0;
    margin-top: 1px\9;
    line-height: normal;
}

.items_bulk_info .checkbox-add-bulk label {
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    background: #fff;
    border: 1px solid rgba(0,0,0,.3);
    border-radius: 2px;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    margin-top: 5px;
}

.items_bulk_info .btn__favorite .gray {
    color: #d1d1d1;
}

.fa-stack-1x {
    line-height: inherit;
}

.fa-stack-1x, .fa-stack-2x {
    position: absolute;
    left: 0;
    width: 100%;
    text-align: center;
}

.fa {
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.fa, .fa-stack {
    display: inline-block;
}

.items_bulk_info .btn__favorite .white {
    color: #fff;
}

.items__info-title .property-listing-label {
    color: #000;
    font-size: 13px;
    font-family: 'Open Sans',sans-serif;
    font-weight: 600;
    margin-bottom: 8px;
}

.items__info-title .price {
    font-family: 'Open Sans',sans-serif;
    font-size: 18px;
    font-weight: 700;
    color: #333;
}

.items__info-title .__items__info__mortgage-affiliate {
    display: inline-block;
    right: 15px;
}

.items__info-title .__items__info__mortgage-affiliate span.__items__info__kpr {
    display: inline-block;
    vertical-align: top;
    font-size: 13px;
    font-family: 'Open Sans',sans-serif;
    margin-top: 8px;
    color: #888;
}
/* filter */

.btn-sort{
      height: 45px;
      width:100%;
}

.dropdown-filter{
    width: 15%;
    float: right;
    margin: 18px;
}

.text-right {
    text-align: right;
}

.items_bulk_info {
    margin-right: 16px;
    margin-bottom: 15px;
}

.__items__info__more {
  margin-top: 20px;
    height: 48px;
    width: 100%;
    margin-left: 1px;
    color: #888;
    font-size: .9em;
    font-weight: 300;
    bottom: 0;
    background-color: #fafafa;
}

.agent-infobox, .property-list-view .superfeatured__company-info {
    display: inline-block;
    vertical-align: top;
    overflow: hidden;
    padding: 6px 0;
    width: 100%;
    height: 100%;
}

.agent-infobox figure, .property-list-view .superfeatured__company-info figure {
    display: inline-block;
    vertical-align: top;
    border-radius: 50px;
    overflow: hidden;
    width: 32px;
    float: left;
}

li.__item a {
    vertical-align: top;
}

.__items__info__more a {
    color: #333;
}

.form-inline .input-group>.form-control, figure img {
    width: 100%;
}

img {
    vertical-align: middle;
}

.agent-infobox .info, .property-list-view .superfeatured__company-info .info {
    display: inline-block;
    vertical-align: top;
    margin-left: 5px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: normal;
    width: calc(76%);
}

.agent-infobox h4, .property-list-view .superfeatured__company-info h4 {
    font-size: 13px;
    margin: 0;
    width: 100%;
}

.agent-infobox .info a, .property-list-view .superfeatured__company-info .info a {
    clear: both;
    display: block;
    height: 17px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.agent-infobox h5, .property-list-view .superfeatured__company-info h5 {
    font-size: 10px;
    margin: 0;
}

.agent-infobox h5 a, .property-list-view .superfeatured__company-info h5 a {
    color: #888;
    font-weight: 300;
}

.contact-agent {
    font-family: Montserrat,sans-serif;
    width: 147px;
    padding: 5px;
    letter-spacing: -.28px;
    font-size: 11px;
}

/* slider */

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 15px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4CAF50;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4CAF50;
    cursor: pointer;
}

.range-slider {
    position: relative;
    height: 80px;
}
.extra-controls {
    position: relative;
    border-top: 3px solid #000;
    padding: 10px 0 0;
}

.range-slider{
  width: 100%
}


/* filter collaps */
.filter-collpas{
  padding: 20px;
  width: 100%;
}

.md-padding{
  padding-bottom: 0px;
}

.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}

.align-items-center{
  display: flex;
    padding: 20px;
    margin-left: 20px;
    width: 100%;
}

.col-auto{
  font-size: 35px;
}

.col-search{
  height: 40px;
margin: 15px;
border: none;
box-shadow: none;
background: none;
width: 600px;
}

.col-auto-btn{
  font-size: 35px;
  margin: 10px;
}
</style>
@stop
@section('content')
<!-- home wrapper -->
<div class="home-wrapper">
  <div class="container">
    <div class="row">

      <!-- home content -->
      <div class="col-md-10 col-md-offset-1">
        <div class="home-content">

        </div>
      </div>
      <!-- /home content -->

    </div>
  </div>
</div>
<!-- /home wrapper -->

</header>
<!-- /Header -->

<!-- About -->
<div id="parking" class="section md-padding">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <!-- Section header -->
      <div class="section-header text-center">
        <!-- Search form -->
        <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-lg-9">
                                    <form class="card card-sm">
                                        <div class="card-body row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fa fa-search h4 text-body"></i>
                                            </div>
                                            <!--end of col-->
                                            <div class="col-search">
                                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                            </div>
                                            <!--end of col-->
                                            <div class="col-auto-btn">
                                                <button class="btn btn-lg btn-success" type="submit">Search</button>
                                            </div>
                                            <!--end of col-->
                                        </div>
                                    </form>
                                </div>
                                <!--end of col-->
                            </div>
      </div>
      <!-- /Section header -->

      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="filtering" style="display:flow-root">
              <button class="btn btn-default btn-filter" type="button" data-toggle="collapse" data-target="#filteringPage" aria-expanded="false" aria-controls="filteringPage">Filter <i class="fa fa-filter"></i></button>
              <div class="dropdown dropdown-filter">
                <button class="btn btn-default btn-sort dropdown-toggle" type="button" data-toggle="dropdown">Sort
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="collapse multi-collapse" id="filteringPage">
                  <div class="card card-body">
                    <div class="filter-collpas">
                      <form>
                        <div class="slider-filter">
                          Prices<br><br>
                          <div class="range-slider">
                              <input type="text" class="js-range-slider" id="slider" value="" />
                          </div>
                          <hr>
                        </div>
                        <div class="filter-category">
                          Category
                          <hr>
                        </div>
                        <div class="filter-action">
                          <center>
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-info">Apply</button>
                          </cnter>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <!-- about -->
            <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="images/garasi.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="items__info">
                    <div class="row pl15 pr15">
                      <div class="col-xs-8 pr0 items__info-title">
                        <h4 class="long-title" itemprop="name">Rumah Mewah di Bandung Timur. Cocok sebagai Investasi dan Hunian.</h4>
                        <address>
                          <ul id="page-list-view-item-address-256887358">
                            <li class="complexName">Villa Pajajaran</li>
                            <li class="locality">Bandung</li>
                            <li class="province">Jawa Barat</li>
                          </ul>
                        </address>
                        <ul id="page-list-view-item-property-attribute-256887358" class="property-attribute-list-view">
                          <li class="attribute_item">4 Kamar Tidur</li>
                          <li class="attribute_item">2 Kamar Mandi</li>
                          <li class="attribute_item">119m² Luas Tanah</li>
                          <li class="attribute_item">336m² Luas Bangunan</li>
                        </ul>
                      </div>
                      <div class="col-xs-4 pl0 pt15 items__info-title text-right">
                        <div class="items_bulk_info">
                            <span class="btn__favorite big-favorite fa-stack guest" data-favorite-type="property" data-favorite-object="256887358" tag="span" style="display: inline-block;">
                              <i class="fa fa-heart fa-stack-1x gray"></i>
                              <i class="fa fa-heart-o fa-stack-1x white"></i>
                            </span>
                            <div class="checkbox-add-bulk">
                                <input type="checkbox" id="checkbox-add-bulk-256887358" class="checkbox-add-bulk-input" name="checkbox-add-bulk" value="1">
                                <label for="checkbox-add-bulk-256887358" class="checkbox-add-bulk-input"></label>
                            </div>
                        </div>
                        <div class="property-listing-label">Rumah Dijual</div>
                        <span class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="360">
                            <span itemprop="price" content="1500000000">Rp1,5mily</span>
                        </span>
                        <span class="__items__info__mortgage-affiliate">
                          <span class="__items__info__kpr">
                            Angsuran<br>&nbsp;Rp12,5jt/month
                          </span>
                        </span>
                      </div>
                    </div>
                    <div class="__items__info__more">
                      <div class="col-xs-7 pr0">
                        <div id="page-list-view-item-property-infobox-256887358" class="agent-infobox" data-agent-id="34284867" itemscope="itemscope" itemtype="http://schema.org/Person"><figure>
                            <a href="/id/RifkiRefidian"><img src="https://picture.urbanindo.com/agent/34284867/494c7c27/160/160.jpg" alt="Rifki Refidian" itemprop="image"></a></figure>
                        <div class="info">
                          <h4>
                            <a class="agent-info__fullname" href="/id/RifkiRefidian" target="_blank"><span class="agent-info__fullname" itemprop="name">Rifki Refidian</span>    <span class="verified" title="Pengguna tervefikasi" style="color: #98bc3c;margin-left:2px;"><i class="fa fa-check-circle"></i></span></a>
                          </h4>
                          <h5>
                            <a class="agent-info__company-id" href="/id/directory/agent" target="_blank">Agen Independen</a>
                          </h5>
                        </div>
                        </div>
                      </div>
                      <div class="col-lg-5 pl0 text-right" style="line-height: 45px;">
                        <button type="button" id="page-list-view-item-agent-contact-256887358" class="contact-agent btn btn-primary btn-sm" data-loading-text="Memuat..." data-agent-username="RifkiRefidian" data-agent-name="Rifki" data-agent-telephone="082113958785" data-property-id="256887358" data-is-premium="1" data-popover-title="Kontak untuk agen Rifki" autocomplete="off"><i class="fa fa-phone"></i> Kontak Agen (08211....)</button>
                        <div class="hidden">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="images/parkir1.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="items__info">
                    <div class="row pl15 pr15">
                      <div class="col-xs-8 pr0 items__info-title">
                        <h4 class="long-title" itemprop="name">Rumah Mewah di Bandung Timur. Cocok sebagai Investasi dan Hunian.</h4>
                        <address>
                          <ul id="page-list-view-item-address-256887358">
                            <li class="complexName">Villa Pajajaran</li>
                            <li class="locality">Bandung</li>
                            <li class="province">Jawa Barat</li>
                          </ul>
                        </address>
                        <ul id="page-list-view-item-property-attribute-256887358" class="property-attribute-list-view">
                          <li class="attribute_item">4 Kamar Tidur</li>
                          <li class="attribute_item">2 Kamar Mandi</li>
                          <li class="attribute_item">119m² Luas Tanah</li>
                          <li class="attribute_item">336m² Luas Bangunan</li>
                        </ul>
                      </div>
                      <div class="col-xs-4 pl0 pt15 items__info-title text-right">
                        <div class="items_bulk_info">
                            <span class="btn__favorite big-favorite fa-stack guest" data-favorite-type="property" data-favorite-object="256887358" tag="span" style="display: inline-block;">
                              <i class="fa fa-heart fa-stack-1x gray"></i>
                              <i class="fa fa-heart-o fa-stack-1x white"></i>
                            </span>
                            <div class="checkbox-add-bulk">
                                <input type="checkbox" id="checkbox-add-bulk-256887358" class="checkbox-add-bulk-input" name="checkbox-add-bulk" value="1">
                                <label for="checkbox-add-bulk-256887358" class="checkbox-add-bulk-input"></label>
                            </div>
                        </div>
                        <div class="property-listing-label">Rumah Dijual</div>
                        <span class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="360">
                            <span itemprop="price" content="1500000000">Rp1,5mily</span>
                        </span>
                        <span class="__items__info__mortgage-affiliate">
                          <span class="__items__info__kpr">
                            Angsuran<br>&nbsp;Rp12,5jt/month
                          </span>
                        </span>
                      </div>
                    </div>
                    <div class="__items__info__more">
                      <div class="col-xs-7 pr0">
                        <div id="page-list-view-item-property-infobox-256887358" class="agent-infobox" data-agent-id="34284867" itemscope="itemscope" itemtype="http://schema.org/Person"><figure>
                            <a href="/id/RifkiRefidian"><img src="https://picture.urbanindo.com/agent/34284867/494c7c27/160/160.jpg" alt="Rifki Refidian" itemprop="image"></a></figure>
                        <div class="info">
                          <h4>
                            <a class="agent-info__fullname" href="/id/RifkiRefidian" target="_blank"><span class="agent-info__fullname" itemprop="name">Rifki Refidian</span>    <span class="verified" title="Pengguna tervefikasi" style="color: #98bc3c;margin-left:2px;"><i class="fa fa-check-circle"></i></span></a>
                          </h4>
                          <h5>
                            <a class="agent-info__company-id" href="/id/directory/agent" target="_blank">Agen Independen</a>
                          </h5>
                        </div>
                        </div>
                      </div>
                      <div class="col-lg-5 pl0 text-right" style="line-height: 45px;">
                        <button type="button" id="page-list-view-item-agent-contact-256887358" class="contact-agent btn btn-primary btn-sm" data-loading-text="Memuat..." data-agent-username="RifkiRefidian" data-agent-name="Rifki" data-agent-telephone="082113958785" data-property-id="256887358" data-is-premium="1" data-popover-title="Kontak untuk agen Rifki" autocomplete="off"><i class="fa fa-phone"></i> Kontak Agen (08211....)</button>
                        <div class="hidden">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="images/parkir2.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="items__info">
                    <div class="row pl15 pr15">
                      <div class="col-xs-8 pr0 items__info-title">
                        <h4 class="long-title" itemprop="name">Rumah Mewah di Bandung Timur. Cocok sebagai Investasi dan Hunian.</h4>
                        <address>
                          <ul id="page-list-view-item-address-256887358">
                            <li class="complexName">Villa Pajajaran</li>
                            <li class="locality">Bandung</li>
                            <li class="province">Jawa Barat</li>
                          </ul>
                        </address>
                        <ul id="page-list-view-item-property-attribute-256887358" class="property-attribute-list-view">
                          <li class="attribute_item">4 Kamar Tidur</li>
                          <li class="attribute_item">2 Kamar Mandi</li>
                          <li class="attribute_item">119m² Luas Tanah</li>
                          <li class="attribute_item">336m² Luas Bangunan</li>
                        </ul>
                      </div>
                      <div class="col-xs-4 pl0 pt15 items__info-title text-right">
                        <div class="items_bulk_info">
                            <span class="btn__favorite big-favorite fa-stack guest" data-favorite-type="property" data-favorite-object="256887358" tag="span" style="display: inline-block;">
                              <i class="fa fa-heart fa-stack-1x gray"></i>
                              <i class="fa fa-heart-o fa-stack-1x white"></i>
                            </span>
                            <div class="checkbox-add-bulk">
                                <input type="checkbox" id="checkbox-add-bulk-256887358" class="checkbox-add-bulk-input" name="checkbox-add-bulk" value="1">
                                <label for="checkbox-add-bulk-256887358" class="checkbox-add-bulk-input"></label>
                            </div>
                        </div>
                        <div class="property-listing-label">Rumah Dijual</div>
                        <span class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="360">
                            <span itemprop="price" content="1500000000">Rp1,5mily</span>
                        </span>
                        <span class="__items__info__mortgage-affiliate">
                          <span class="__items__info__kpr">
                            Angsuran<br>&nbsp;Rp12,5jt/month
                          </span>
                        </span>
                      </div>
                    </div>
                    <div class="__items__info__more">
                      <div class="col-xs-7 pr0">
                        <div id="page-list-view-item-property-infobox-256887358" class="agent-infobox" data-agent-id="34284867" itemscope="itemscope" itemtype="http://schema.org/Person"><figure>
                            <a href="/id/RifkiRefidian"><img src="https://picture.urbanindo.com/agent/34284867/494c7c27/160/160.jpg" alt="Rifki Refidian" itemprop="image"></a></figure>
                        <div class="info">
                          <h4>
                            <a class="agent-info__fullname" href="/id/RifkiRefidian" target="_blank"><span class="agent-info__fullname" itemprop="name">Rifki Refidian</span>    <span class="verified" title="Pengguna tervefikasi" style="color: #98bc3c;margin-left:2px;"><i class="fa fa-check-circle"></i></span></a>
                          </h4>
                          <h5>
                            <a class="agent-info__company-id" href="/id/directory/agent" target="_blank">Agen Independen</a>
                          </h5>
                        </div>
                        </div>
                      </div>
                      <div class="col-lg-5 pl0 text-right" style="line-height: 45px;">
                        <button type="button" id="page-list-view-item-agent-contact-256887358" class="contact-agent btn btn-primary btn-sm" data-loading-text="Memuat..." data-agent-username="RifkiRefidian" data-agent-name="Rifki" data-agent-telephone="082113958785" data-property-id="256887358" data-is-premium="1" data-popover-title="Kontak untuk agen Rifki" autocomplete="off"><i class="fa fa-phone"></i> Kontak Agen (08211....)</button>
                        <div class="hidden">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /about -->
            <!-- /about -->
          </div>
          <div class="col-sm-3">
          </div>
        </div>
      </div>

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</div>
<!-- /About -->


<!-- Footer -->
<footer id="footer" class="sm-padding bg-dark">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <div class="col-md-12">

        <!-- footer logo -->
        <div class="footer-logo">
          <a href="index.html"><img src="{{asset('assets/img/logo-alt.png')}}" alt="logo"></a>
        </div>
        <!-- /footer logo -->

        <!-- footer follow -->
        <ul class="footer-follow">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
        <!-- /footer follow -->

        <!-- footer copyright -->
        <div class="footer-copyright">
          <p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        </div>
        <!-- /footer copyright -->

      </div>

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</footer>
<!-- /Footer -->

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top -->

<!-- Preloader -->
<div id="preloader">
  <div class="preloader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<!-- /Preloader -->
@stop

@section('script')
<script type="text/javascript" src="{{asset('js/ion.rangeSlider.min.js')}}"></script>
<script>
$("#slider").ionRangeSlider({
  type: "double",
  grid: true,
  min: 0,
  max: 1000000,
  from: 500000,
  to: 800000,
  prefix: "IDR ",
  step: 25000
});
</script>
@stop
