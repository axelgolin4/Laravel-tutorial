<div>
        <input type="text" wire:model="note" />
        <button wire:click="store">Save note</button>

        <br>
        <p style="color: red;">{{ $feedback }}</p>

        <br>
        @foreach($notes as $note)
            <p>{{ $note->content }} 
                <button wire:click="destroy('{{$note->id}}')">Delete</button>
                <button wire:click="update('{{$note->id}}')">update</button>
            </p>
        @endforeach
</div>



