@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>Создание товара</h2>
        @if (session('success'))
            <div class="mx-5 mt-2 alert alert-info w-25">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('product_create_valid') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="title_product" class="col-md-4 col-form-label text-md-end">Название</label>
                <div class="col-md-6">
                    <input id="title_product" type="text" class="form-control" name="title_product" required>
                    @error('title_product')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">Описание</label>
                <div class="col-md-6">
                    <input id="description" type="text" class="form-control" name="description">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="gender" class="col-md-4 col-form-label text-md-end">Пол</label>
                <div class="col-md-6">
                    <input id="gender" type="text" class="form-control" name="gender">
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="photo" class="col-md-4 col-form-label text-md-end">Фото</label>
                <div class="col-md-6">
                    <input id="photo" type="file" class="form-control" name="photo">
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="category_id" class="col-md-4 col-form-label text-md-end">Бренд товара</label>
                <div class="col-md-6">
                    <select name="category_id" id="category_id" class="from-select pe-3">
                        @foreach ($brands as $item)
                            <option value="{{ $item->id }}">{{ $item->title_brand }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="category_id" class="col-md-4 col-form-label text-md-end">Категория товара</label>
                <div class="col-md-6">
                    <select name="category_id" id="category_id" class="from-select pe-3">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->title_category }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="quantity" class="col-md-4 col-form-label text-md-end">Количество</label>
                <div class="col-md-6">
                    <input id="quantity" type="number" class="form-control" name="quantity" required>
                    @error('quantity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="cost" class="col-md-4 col-form-label text-md-end">Цена</label>
                <div class="col-md-6">
                    <input id="cost" type="text" class="form-control" name="cost" required>
                    @error('cost')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="category_id" class="col-md-4 col-form-label text-md-end">Размеры</label>
                <div class="col-md-7">
                    @foreach ($sizes as $item)
                        <input type="checkbox" id="size_{{$item->id}}" name="size_id[{{$item->id}}]" value="{{$item->id}}" />
                        <label for="size_{{$item->id}}">{{$item->size}}</label>
                    @endforeach
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <input type="submit" class="btn btn-primary" value="Создать товар">

                </div>
            </div>
        </form>
    </div>
@endsection
