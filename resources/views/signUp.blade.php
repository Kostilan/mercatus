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
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Почта</label>
                <input type="email" class="form-control" id="" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="" name="password">
            </div>
            <div class="mb-3">
              <label for="password_repeat" class="form-label">Повтор пароля</label>
              <input type="password" class="form-control" id="" name="password_repeat">
          </div>
            <button type="submit" class="btn btn-primary">Регистрация</button>
        </form>
    </div>
@endsection
