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
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </div>

        <button type="submit">Save</button>
    </form>
</div>
