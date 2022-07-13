@extends('templates.base')

@section('pageTitle', 'DC Comics')

@section('pageMain')
    <main>
        <div class="jumbotron">
        </div>

        <div class="thumb">
            <div id="label">
                <h1>CURRENT SERIES</h1>
            </div>

            <ul>
                @foreach ($arrComics as $comic)
                    <li>
                        <a href="
                        {{ route('card', ['id' => $comic['id']]) }}">
                            <img src="{{ $comic['thumb']}}" alt="cards_img">
                            <h4>{{ $comic['series'] }}</h4>
                        </a>
                    </li>
                @endforeach
            </ul>

            <div id="learn-button">
                <a href="#">
                    <h5>
                        LOAD MORE
                    </h5>
                </a>
            </div>
        </div>

        <div class="shop">
            <ul>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="comics_digital_img">
                        <span>DC MERCHANDISE</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="comics_merchandise_img">
                        <span>DC MERCHANDISE</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="comics_subscriptions_img">
                        <span>SUBSCRIPTION</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="comics_shop_img">
                        <span>COMIC SHOP LOCATOR</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="power_visa_img">
                        <span>DC POWER VISA</span>
                    </a>
                </li>
            </ul>
        </div>
    </main>
@endsection
