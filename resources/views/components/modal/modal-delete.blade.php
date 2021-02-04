<div
    {{ $attributes->only(['x-show', 'wire:ignore']) }}
    x-transition:enter="transition ease-out duration-150"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
>
    <div
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        @click.away="closeModal" @keydown.escape="closeModal"
        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog"
        {{ $attributes->except(['wire:click', 'wire:ignore']) }}
    >
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-end">
            <button
                class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded hover:text-gray-700"
                aria-label="close" @click="closeModal">
                <i class="fas fa-times-circle"></i>
            </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-6">
            <!-- Modal title -->
            <p class="mb-2 text-lg font-semibold text-gray-700">
                {{ $title }}
            </p>
            <!-- Modal description -->
            {{ $body }}
        </div>
        <footer
            class="items-center text-right px-6 py-3 -mx-6 -mb-4 space-y-4 space-y-0 space-x-2 bg-gray-50">
            <x-button.default :label="'Cancel'" :type="'button'" @click="closeModal" />
            <x-button.primary :label="'Delete'" :type="'button'" {{ $attributes->only(['wire:click']) }} />
        </footer>
    </div>
</div>