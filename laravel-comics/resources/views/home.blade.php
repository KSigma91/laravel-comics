@extends('templates.base')

@section('pageTitle', 'DC Comics')

@section('pageMain')
    <main>
        <ul>
            @foreach ($arrComics as $comic)
                <li>
                    {{ $comic['title'] }}
                </li>
            @endforeach
        </ul>
    </main>
@endsection
