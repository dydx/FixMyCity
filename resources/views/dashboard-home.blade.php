@extends('app')

@section('page-title') Dashboard Overview @stop

@section('sidebar')
  <div class="panel panel-default">
    <div class="panel-heading">Work Requests</div>
    <ul class="list-group">
      <li class="list-group-item">Todo <span class="badge">42</span></li>
      <li class="list-group-item">In Progress <span class="badge">21</span></li>
      <li class="list-group-item">Complete <span class="badge">78</span></li>
    </ul>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">Quick Links</div>
    <ul class="list-group">
      <li class="list-group-item"><a href="">Menu Item 01</a></li>
      <li class="list-group-item"><a href="">Menu Item 02</a></li>
      <li class="list-group-item"><a href="">Menu Item 03</a></li>
      <li class="list-group-item"><a href="">Menu Item 04</a></li>
      <li class="list-group-item"><a href="">Menu Item 05</a></li>
    </ul>
  </div>
@stop

@section('content')
  @foreach($work_orders as $work_order)
  <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading">{{ $work_order->description }}</div>
      <div class="panel-body">
        <img src="//placehold.it/450x200" alt="" class="map img-responsive">
      </div>
    </div>
  </div>
  @endforeach
@stop