<div>
    <form wire:submit.prevent="saveContact">
        
        <input type="text" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
        
        <input type="password" wire:model="password">
        @error('password') <span class="error">{{ $message }}</span> @enderror
     
        <button type="submit">Save Contact</button>
    </form>
</div>
