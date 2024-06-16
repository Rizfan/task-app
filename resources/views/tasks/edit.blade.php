<x-main-layout>
    <x-slot name="header">
        {{ __('Edit Task') }}
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('tasks.update', $task) }}">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-label for="task_name" value="{{ __('Task Name') }}" />
                        <x-input id="task_name" class="block mt-1 w-full" type="text" name="task_name" :value="$task->task_name" required autofocus autocomplete="task_name" />
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