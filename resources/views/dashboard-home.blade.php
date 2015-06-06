@extends('admin')

@section('content')
  <div class="container-fluid">

    <div class="row">

      <div class="col-sm-4">
        <div class="chart-wrapper">
          <div class="chart-title panel-warning">
            Down Stop Sign
            <span class="pull-right">6/5/2015</span>
          </div>
          <div class="chart-stage">
              <div
                id="map0"
                class="map"
                data-lat="33.47"
                data-long="-81.961"></div>
          </div>
          <div class="chart-notes">
            <ul class="list-group">
              <li class="list-group-item">ADDRESS GOES HERE</li>
              <li class="list-group-item">There is a down stop sign at this intersection</li>
            </ul>
          </div>
        </div>
      </div>

      @foreach($work_requests as $work_request)
      <div class="col-sm-4">
        <div class="chart-wrapper">
          <div class="chart-title panel-warning">
            {{$work_request->title}}
            <span class="pull-right">6/5/2015</span>
          </div>
          <div class="chart-stage">
              <div
                id="map{{$work_request->id}}"
                class="map"
                data-lat="{{$work_request->lat}}"
                data-long="{{$work_request->long}}"></div>
          </div>
          <div class="chart-notes">
            <ul class="list-group">
              <li class="list-group-item">ADDRESS GOES HERE</li>
              <li class="list-group-item">{{ str_limit($work_request->description, 100, '...') }}</li>
            </ul>
          </div>
        </div>
      </div>
      @endforeach

    </div>

@endsection