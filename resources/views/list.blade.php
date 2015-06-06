<ul>
@foreach($wr_list as $wr)
  <li>{{ $wr->title }} -> {{ $wr->geolocation }}</li>
@endforeach
</ul>