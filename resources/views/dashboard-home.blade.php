@extends('admin')

@section('content')
  <div class="container-fluid">

  <!-- this section needs to be looped over per row -->
    <div class="row">

      <div class="col-sm-4">
        <div class="chart-wrapper">
          <div class="chart-title panel-warning">
            Stop Sign
            <span class="pull-right">6/5/2015</span>
          </div>
          <div class="chart-stage">
              <div id="map1" class="map"></div>
          </div>
          <div class="chart-notes">
            <ul class="list-group">
              <li class="list-group-item">540 Telfair St</li>
              <li class="list-group-item">There is a down stop sign at the corner</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="chart-wrapper">
          <div class="chart-title">
            Pothole
            <span class="pull-right">6/5/2015</span>
          </div>
          <div class="chart-stage">
              <div id="map2" class="map"></div>
          </div>
          <div class="chart-notes">
            <ul class="list-group">
              <li class="list-group-item">1234 East Boundary Street</li>
              <li class="list-group-item">There is a huge pothole in the middle of the road</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="chart-wrapper">
          <div class="chart-title">
            Water Leak
            <span class="pull-right">6/5/2015</span>
          </div>
          <div class="chart-stage">
              <div id="map3" class="map"></div>
          </div>
          <div class="chart-notes">
            <ul class="list-group">
              <li class="list-group-item">512 West Robinson Avenue</li>
              <li class="list-group-item">There is a fire hydrant leaking all over the road</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

@endsection