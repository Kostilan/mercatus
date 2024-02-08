@extends('layouts.app')

@section('title')

@section('content')
    @if(session('success'))
    <div class="message">
        {{session('success')}}
    </div>
    
    @endif
@endsection