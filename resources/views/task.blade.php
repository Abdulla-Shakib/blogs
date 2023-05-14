@extends('layout')
@section('title', 'Task')
@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('tasks')
        </div>
    </div>
@endsection
