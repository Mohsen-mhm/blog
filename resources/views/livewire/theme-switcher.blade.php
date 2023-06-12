<button wire:click="toggleTheme" class="p-2 mx-2">
    @if ($mode === 'light')
        <i class="fas fa-sun text-yellow-300 text-2xl"></i>
    @else
        <i class="fas fa-moon text-white text-2xl"></i>
    @endif
</button>
