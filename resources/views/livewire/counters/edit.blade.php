<div>
    {{-- Stop trying to control. --}}
    <form wire:submit="update">
        <input type="text" placeholder="{{$vision}}" wire:model="vision"><br>
        <input type="text" placeholder="{{$mission}}" wire:model="mission"><br>
        <button type="submit">update</button>
    </form>
</div>
