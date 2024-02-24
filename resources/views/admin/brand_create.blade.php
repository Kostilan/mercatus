@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h2>Создание бренда</h2>
        @if (session('success'))
            <div class="mx-5 mt-2 alert alert-info w-25">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('brand_create_valid') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="title_brand" class="col-md-4 col-form-label text-md-end">Название</label>
                <div class="col-md-6">
                    <input id="title_brand" type="text" class="form-control" name="title_brand" required>
                    @error('title_brand')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <input type="submit" class="btn btn-primary" value="Создать бренд">

                </div>
            </div>
        </form>
    </div>
@endsection