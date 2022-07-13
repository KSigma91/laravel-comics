@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')
    <div class="card">
        <ul>
            @foreach ($arrComics as $info)
                <li>
                    <h2>{{ $info['title']}}</h2>
                </li>
                <li>
                    <h5>{{ 'U.S. Price: ' . $info['price'] . 'AVAILABLE'}}</h5>
                    <span>Check Availability</span>
                </li>
                <li>
                    <p>{{ $info['description']}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
