<x-main-layout>
    <x-slot name="header">
        {{ __('Edit User Role') }}
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('users.update', $users) }}">
                    @csrf
                    @method('PUT')

                    <div class="mt-4">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$users->name" required autocomplete="name" readonly />
                    </div>

                    <div class="mt-4">
                        <x-label for="role" value="{{ __('Select Role') }}" />
                        <x-select name="role" id="roles" class="block mt-1 w-full" required>
                            <option value="Administrator" @if($users->Roles->pluck('name')->join(', ') == "Administrator") selected @endif>Administrator</option>
                            <option value="Reviewer" @if($users->Roles->pluck('name')->join(', ') == "Reviewer") selected @endif>Reviewer</option>
                        </x-select>
                    </div>

                    <div class="flex mt-4">
                        <x-button>
                            {{ __('Save Task') }}
                        </x-button>
                    </div>
            </div>
        </div>
    </div>
</x-main-layout>