<x-main-layout>
    <x-slot name="header">
        {{ __('API Tokens') }}
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('api.api-token-manager')
        </div>
    </div>
</x-main-layout>