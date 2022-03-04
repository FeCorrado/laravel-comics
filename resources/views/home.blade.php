@extends('layouts.default')

@section('content')
<div class="jumbo">
    <img src="../../img/jumbotron.jpg" alt="">
    <div class="current">CURRENT SERIES</div>
</div>
    <div class="cards-box">
        <div class="cards-min-box">
            @foreach ($array as $comic)
                <div class="comics-card">
                    <div class="card-img">
                        <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                    </div>
                    <p>{{ $comic["series"] }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="home-bot">
        <div class="blu">
            <div class="blu-box">
                <div>
                    <img src="../../img/buy-comics-digital-comics.png" alt="">
                    <h5>DIGITAL COMICS</h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-merchandise.png" alt="">
                    <h5>DC MERCHANDISE</h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-subscriptions.png" alt="">
                    <h5>SUBSCRIPTIONS</h5>
                </div>
                <div>
                    <img src="../../img/buy-comics-shop-locator.png" alt="">
                    <h5>COMICS SHOP LOCATOR</h5>
                </div>
                <div>
                    <img src="../../img/buy-dc-power-visa.svg" alt="">
                    <h5>DC POWER VISA</h5>
                </div>
            </div>
        </div>
    </div>
@endsection