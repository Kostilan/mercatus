@extends('layouts.app')

@section('title')

@section('content')
@if(session('success'))
<div class="text-danger">
    {{session('success')}}
</div>

@endif
    <div class="container w-50">
        <h2>Авторизация</h2>
        <form action="{{ route('signIn_valid') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Почта</label>
                <input type="email" class="form-control" id="" name="email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="" name="password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Авторизация</button>
        </form>
    </div>
@endsection
