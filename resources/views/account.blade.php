@extends('layouts.app')

@section('title')

@section('content')
    @if (session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
        @endif
<div class="container">
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="" name="name" value="{{$user->name}}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Почта</label>
                <input type="email" class="form-control" id="" name="email" value="{{$user->email}}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-lg form-button">Регистрация</button>
        </form>
    </div>
@endsection
