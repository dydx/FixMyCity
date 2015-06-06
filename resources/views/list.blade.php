<ul>
@foreach($wr_list as $wr)
  <li>
      <div
      id="map{{$wr->id}}"
      class="map"
      data-geo="{{{$wr->geolocation}}}"
      >
        <h2>{{$wr->title}}</h2>
        <p>{{$wr->description}}</p>
      </div>
  </li>
@endforeach
</ul>