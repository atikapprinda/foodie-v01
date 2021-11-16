<img src="{{$food['picture_url']}}"> 
<h2>{!! $food['title'] !!} </h2>
<h4>{!! $food['base_price'] !!}</h4>
{!! $food['description'] !!} <hr>

{!! implode(', ', $food['categories']) !!}; <br>

<a href="/">Back to menu</a>