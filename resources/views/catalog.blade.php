@extends('layouts.app')

@section('title')

@section('content')
    @if (session('success'))
        <div class="mx-5 mt-2 alert alert-info w-25">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
    @if($products)
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/photo/' . $product->photo) }}" class="card-img-top w-50 " alt="{{ $product->title_product }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title_product }}</h5>
                        <p class="card-text">Пол: {{ $product->gender }}</p>
                        <p class="card-text">Цена: {{ $product->cost }} руб.</p>
                        <a href="{{route('product', ['id' => $product->id])}}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
