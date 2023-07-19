<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NotRequest;


class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create(): View
    {
        return view('notes.create');
    }

    public function store(NotRequest $request): RedirectResponse
    {
        
        Note::create($request->all());
        return redirect()->route('notes.index')-> with('success', 'Nota creada correctamente');
    }

    public function edit(Note $note): View
    {

        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('notes.index')-> with('success', 'Nota actualizada correctamente');
    }

    public function show(Note $note): View
    {
        return view('notes.show', compact('note'));
    }

    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('notes.index')-> with('danger', 'Nota eliminada correctamente');
    }
    
    
}
