@extends('layouts.landing')

@section('title', 'Notes')

@section('content')
    <form method="POST" action="{{ route('notes.update', $note -> id)}}">

        @method('PUT')
        @csrf
        <label>Title:</label>
        <input type="text" name="title" value="{{ $note->title }}" />
        @error('title')
            <div style="color:red;">{{ $message }}</div>
        @enderror


        <label>Description:</label>
        <input type="text" name="description" value="{{ $note->description }}" />
        @error('description')
            <div style="color:red;">{{ $message }}</div>
        @enderror


        <input type="submit" value="Update" />

        
    </form>
@endsection