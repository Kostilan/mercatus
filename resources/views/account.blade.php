@extends('layouts.app')

@section('title')

@section('content')
    @if (session('success'))
        <div class="mx-5 mt-2 alert alert-info w-25" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex">
        <div class="mx-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a class="account_link" href="{{route('account')}}">Аккаунт</a>
                </li>
                <li class="list-group-item">
                    <a class="account_link" href="">Корзина</a>
                </li>
                <li class="list-group-item">
                    <a class="account_link" href="">История покупок</a>
                </li>
                

            </ul>
        </div>
        <div class="container">
            <h2>Данные аккаунта</h2>
            <form action="{{ route('update_account') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $user->id }}" name="user_id">
                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" class="form-control" id="" name="name" value="{{ $user->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input type="email" class="form-control" id="" name="email" value="{{ $user->email }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-lg btn-primary form-button">Обновить данные</button>
            </form>
        </div>
    </div>
@endsection
