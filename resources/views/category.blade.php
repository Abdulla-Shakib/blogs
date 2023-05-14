@extends('layout')
@section('title', 'Category')
@section('content')
    <div class="card">
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @livewire('categories')
        </div>
    </div>
@endsection
