<x-main-layout>
    <x-slot name="header">
        {{ __('Tasks') }}
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                @can('manage tasks')
                <x-link href="{{ route('tasks.create') }}" class="m-4">Add new task</x-link>
                @endcan

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Task name
                            </th>
                            @can('manage tasks')
                            <th scope="col" class="px-6 py-3">
                                Options
                            </th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tasks as $task)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $task->task_name }}
                            </td>
                            @can('manage tasks')
                            <td class="px-6 py-4">
                                <x-link href="{{ route('tasks.edit', $task) }}">Edit</x-link>
                                <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button type="submit" onclick="return confirm('Are you sure?')">Delete</x-danger-button>
                                </form>
                            </td>
                            @endcan
                        </tr>
                        @empty
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td colspan="2" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ __('No tasks found') }}
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-main-layout>