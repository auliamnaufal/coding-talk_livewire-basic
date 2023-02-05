<div>
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="loud">

    Hello {{ $name }} @if($loud) ! @endif
</div>

