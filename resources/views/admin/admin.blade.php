@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>Список товаров</h2>
        <a class="btn btn-primary link-light" href="{{ route('product_create') }}">Добавить товар</a>
        @if (session('success'))
            <div class="mx-5 mt-2 alert alert-info w-25">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Фото</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Пол</th>
                    <th scope="col">Бренд</th>
                    <th scope="col">Категория продукта</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Редактировать</th>
                    <th scope="col">Удалить</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->title }}</td>
                        <td><img class="w-25" src="storage/photo/{{ $product->photo }}" alt="Фото"></td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->gender }}</td>
                        <td>{{ $product->brand->title_brand }}</td>
                        <td>{{ $product->category->title_category }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->cost }}</td>
                        <td><a class="btn btn-warning link-light"
                                href="{{ route('product_update', ['id' => $product->id]) }}">Редактировать</a></td>
                        <td>
                            <form action="{{ route('product_delete', ['id' => $product->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container mt-3">
        <h2>Список брэндов</h2>
        <a class="btn btn-primary link-light" href="{{ route('brand_create') }}">Добавить брэнд</a>
        @if (session('success'))
            <div class="mx-5 mt-2 alert alert-info w-25">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Редактировать</th>
                    <th scope="col">Удалить</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <th scope="row">{{ $brand->id }}</th>
                        <td>{{ $brand->title_brand }}</td>
                        <td><a class="btn btn-warning link-light"
                                href="{{ route('brand_update', ['id' => $brand->id]) }}">Редактировать</a></td>
                        <td>
                            <form action="{{ route('brand_delete', ['id' => $brand->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container mt-3">
        <h2>Список категорий</h2>
        <a class="btn btn-primary link-light" href="{{ route('category_create') }}">Добавить категорию</a>
        @if (session('success'))
            <div class="mx-5 mt-2 alert alert-info w-25">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Редактировать</th>
                    <th scope="col">Удалить</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->title_category }}</td>
                        <td><a class="btn btn-warning link-light"
                                href="{{ route('category_update', ['id' => $category->id]) }}">Редактировать</a></td>
                        <td>
                            <form action="{{ route('category_delete', ['id' => $category->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
