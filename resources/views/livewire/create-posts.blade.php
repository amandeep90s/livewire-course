<div>
    <form wire:submit="save">
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" wire:model='title'>
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" id="content" wire:model='content'>
            <small>
                Words:
                <span x-text="$wire.content.split(' ').length"></span>
            </small>
            {{-- <small>Characters:
                <span x-text="$wire.content.length"></span>
            </small> --}}
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <button type="submit">Save</button>
    </form>
</div>
