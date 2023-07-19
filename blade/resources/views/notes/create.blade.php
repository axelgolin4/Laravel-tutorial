@extends('layouts.landing')

@section('title', 'Notes')

@section('content')
    <form method="POST" action="{{ route('notes.store') }}">

        @csrf
        <label>Title:</label>
        <input type="text" name="title" /> <br/>
        @error('title')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Description:</label>
        <input type="text" name="description" />
        @error('description')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <input type="submit" value="Create" />

        
    </form>
@endsection