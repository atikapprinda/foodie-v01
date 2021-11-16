@section('style', '/css/styles.css');
    
@foreach ($foods as $food)
    <img src="{{$food['picture_url']}}"> <br>
    <a href="detail/{{$food['id']}}"> {!!  $food['title'] !!} </a> <br>
    {!! $food['base_price'] !!} <br>
    
@endforeach
@endsection