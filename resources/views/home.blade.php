<link rel="stylesheet" type="text/css" href="/css/styles.css">

<section class="catalog">
    <div class="header">
        <h1>Foodie 1.0</h1>
        <b>Teman setia perut kelaparan</b> 
    </div>
    
    <br>
    <h1>Daftar Menu</h1>
    <div class="main-container">
        @foreach ($foods as $food)
        <div class="second-container"> 
            <img src="{{$food['picture_url']}}" alt="Nasi Goreng"> <br>
            <b><a href="detail/{{$food['id']}}"> {!!  $food['title'] !!} </a></b> <br>
            Rp{!! $food['base_price'] !!},- <br>
        </div>
        @endforeach
    </div>
</section>
