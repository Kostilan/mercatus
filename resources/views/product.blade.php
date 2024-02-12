@extends('layouts.app')

@section('title', $product->title_product)

@section('content')
    <div class="container">
        <div class="card">
            <img src="{{ asset('storage/photo/' . $product->photo) }}" class="card-img-top w-50" alt="{{ $product->title_product }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title_product }}</h5>
                <p class="card-text">Описание: {{ $product->description }}</p>
                <p class="card-text">Пол: {{ $product->gender }}</p>
                <p class="card-text">Количество: {{ $product->quantity }}</p>
                <p class="card-text">Цена: {{ $product->cost }} руб.</p>
                <a href="#" class="btn btn-primary">В корзину</a>
            </div>
        </div>
    </div>
@endsection
