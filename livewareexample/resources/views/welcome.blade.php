@extends('layouts.app')

@section('title', 'livewire example')

@section('content')
        <h1>Hello: </h1>
        <br>

        @livewire('counter')

        
@endsection