<div>
    <div>
        <label>
            <textarea wire:model="body" placeholder="Whats's up doc?"></textarea>
        </label>
        @error('body') <span class="text-red-700">{{$message}}</span> @enderror
    </div>

    <x-primary-button wire:click="tweet">Tweet</x-primary-button>
</div>
