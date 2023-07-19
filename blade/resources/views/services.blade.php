@extends('layouts.landing')

@section('title', 'services')

@section('content')
    <h1>Services</h1>

    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.')
    @endcomponent

    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.')
    @endcomponent

@endsection