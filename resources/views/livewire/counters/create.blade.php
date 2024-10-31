<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <form wire:submit="save">
        <input type="text" wire:model="vision"><br>
        <div>
            @error('vision') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <input type="text" wire:model="mission"><br>
        <div>
            @error('mission') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <button type="submit">save</button>
    </form>
</div>
