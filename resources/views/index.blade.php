@extends('layouts.app')

@section('title')

@section('content')
    @if(session('success'))
    <div class="mx-5 mt-2 alert alert-info w-25">
        {{session('success')}}
    </div>
    
    @endif
@endsection