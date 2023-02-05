<div>
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model="greetings" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Selamat Tinggal</option>
    </select>

    {{ implode(', ', $greetings) }} {{ $name }} @if($loud) ! @endif

    <form action="#" wire:submit.prevent="resetName('Bingo')">
        <button>Reset Me</button>
    </form>
</div>

