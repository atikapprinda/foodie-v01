<link rel="stylesheet" type="text/css" href="/css/styles.css">

<section class="catalog">
    <div class="main-container detail">
        <img src="{{$food['picture_url']}}"> 
        <h2>{!! $food['title'] !!} </h2>
        <h4>Rp{!! $food['base_price'] !!},- </h4>
        {!! $food['description'] !!} <hr>

        <b>Category:</b> {!! implode(', ', $food['categories']) !!}; <br>

        <a href="/">Back to menu</a>
    </div>
</section>