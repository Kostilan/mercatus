@extends('layouts.app')

@section('title')

@section('content')
    <div class="container">
        <h2>Регистрация</h2>
        <form action="{{ route('signUp_valid') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="" name="name">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Почта</label>
                <input type="email" class="form-control" id="" name="email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="" name="password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_repeat" class="form-label">Повтор пароля</label>
                <input type="password" class="form-control" id="" name="password_repeat">
                @error('password_repeat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Регистрация</button>
        </form>
    </div>
@endsection
