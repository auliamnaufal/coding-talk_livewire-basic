<div>
    <form wire:submit.prevent="registerUser">
        
        <input type="text" wire:model="name" placeholder="Insert Name here...">
        @error('name') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="email" placeholder="Insert Email here...">
        @error('email') <span class="error">{{ $message }}</span> @enderror
        
        <input type="password" wire:model="password" placeholder="Insert Password here...">
        @error('password') <span class="error">{{ $message }}</span> @enderror
     
        <button type="submit">Save Contact</button>
    </form>
</div>
