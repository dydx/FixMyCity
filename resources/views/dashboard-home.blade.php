@extends('admin')

@section('content')
  <div class="container-fluid">

  <!-- this section needs to be looped over per row -->
    <div class="row"> <!-- little box on the left -->
      <div class="col-sm-3">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
      <div class="col-sm-9"><!-- big box on the right -->
        <div class="chart-wrapper">
          <div class="chart-title">
            Cell Title
          </div>
          <div class="chart-stage">
              <img data-src="holder.js/100%x120/white">
          </div>
          <div class="chart-notes">
            Notes about this chart
          </div>
        </div>
      </div>
    </div>

@endsection