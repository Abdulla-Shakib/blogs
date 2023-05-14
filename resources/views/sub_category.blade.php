@extends('layout')
@section('title', 'Sub-Category')
@section('content')
    <div class="card">
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @livewire('sub-categories')
        </div>
    </div>
@endsection
