@extends('layout.layout')




@section('content')
    <h1>Fumetti</h1>

    {{-- <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}" style="width:100px;height:auto;">
                <h2>{{ $fumetto['title'] }}</h2>
                <p>{{ $fumetto['description'] }}</p>
                <p><strong>Prezzo:</strong> {{ $fumetto['price'] }}</p>
                <p><strong>Serie:</strong> {{ $fumetto['series'] }}</p>
                <p><strong>Data di vendita:</strong> {{ $fumetto['sale_date'] }}</p>
                <p><strong>Tipo:</strong> {{ $fumetto['type'] }}</p>
            </li> --}}

    <div class="container">
        <ul>
            @foreach ($fumetti as $fumetto)
                <div class="cards">
                    <li>
                        <img src="{{ $fumetto['thumb'] }}" alt="">
                        <p>{{ $fumetto['title'] }}</p>
                        <p>{{ $fumetto['description'] }}</p>
                    </li>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
