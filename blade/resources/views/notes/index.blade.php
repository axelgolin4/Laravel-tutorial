@extends('layouts.landing')

@section('title', 'Notes')

@section('content')
    <ul>
        @forelse($notes as $note)
            <li>
                <a href="{{ route('notes.show', $note->id )}}">{{ $note->title }}</a> | 
                <a href=" {{ route('notes.edit', $note->id)}}">EDIT</a>   | 
                <form method="POST" action={{ route('notes.destroy', $note ->id )}}>
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE" />
                </form>
            </li>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>
@endsection