@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>Обновление Категории</h2>
        @if (session('success'))
            <div class="mx-5 mt-2 alert alert-info w-25">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('category_update_valid') }}">
            @csrf
            <div class="row mb-3">
                <label for="title_category" class="col-md-4 col-form-label text-md-end">Название</label>
                <div class="col-md-6">
                    <input type="hidden" value="{{$category->id}}" name="id">
                    <input id="title_category" type="text" class="form-control" name="title_category" value="{{$category->title_category}}" required>
                    @error('title_category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <input type="submit" class="btn btn-primary" value="Редактировать бренд">

                </div>
            </div>
        </form>
    </div>
@endsection