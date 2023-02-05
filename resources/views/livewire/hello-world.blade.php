<div>
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model="greetings">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Selamat Tinggal</option>
    </select>

    {{ $greetings }} {{ $name }} @if($loud) ! @endif
</div>

