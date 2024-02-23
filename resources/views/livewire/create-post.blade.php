<div>
    <h2>New Post:</h2>

    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            <small>Characters:
                <span x-text="$wire.title.length"></span>
            </small>
            @error('title') <em style="color: red;">{{ $message }}</em> @enderror
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            <small>Words:
                <span x-text="$wire.content.split(' ').length - 1"></span>
            </small>
            @error('content') <em style="color: red;">{{ $message }}</em> @enderror
        </label>

        <button type="submit">Save</button>
    </form>
</div>
