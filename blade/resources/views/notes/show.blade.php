@extends('layouts.landing')

@section('title', 'Notes')

@section('content')
    <a href="{{ route('notes.index') }}">Back</a>
    <h1>{{ $note->title }}</h1>
    <p>{{ $note->description }}</p>
@endsection