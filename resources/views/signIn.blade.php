@extends('layouts.app')

@section('title')

@section('content')
    <div class="container w-50">
        <h2>Авторизация</h2>
        <form action="{{ route('signIn_valid') }}" method="POST">
          @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Почта</label>
                <input type="email" class="form-control" id="" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Авторизация</button>
        </form>
    </div>
@endsection
