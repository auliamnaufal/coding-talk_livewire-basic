<div>
    <ul>
        @foreach ($users as $user)
            <livewire:show-user-item :name="$user->name" :email="$user->email" :wire:key="$user->id" />
        @endforeach
    </ul>
</div>
