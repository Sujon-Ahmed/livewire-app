<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
    <div class="w-full max-w-2xl bg-white shadow-xl rounded-2xl p-6">

        <h1 class="text-3xl font-bold text-center mb-6">
            Laravel Livewire Todo App
        </h1>

        <div class="flex gap-3 mb-6">
            <input
                type="text"
                wire:model="title"
                wire:keydown.enter="addTodo"
                placeholder="Enter task..."
                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
            >

            <button
                wire:click="addTodo"
                class="bg-black text-white px-6 py-3 rounded-xl hover:opacity-90"
            >
                Add
            </button>
        </div>

        @error('title')
            <p class="text-red-500 text-sm mb-4">
                {{ $message }}
            </p>
        @enderror

        <div class="space-y-3">
            @forelse($todos as $todo)
                <div class="flex items-center justify-between border border-gray-200 rounded-xl p-4">

                    <div class="flex items-center gap-3">
                        <input
                            type="checkbox"
                            wire:click="toggleComplete({{ $todo->id }})"
                            {{ $todo->completed ? 'checked' : '' }}
                            class="w-5 h-5"
                        >

                        <span class="text-lg {{ $todo->completed ? 'line-through text-gray-400' : '' }}">
                            {{ $todo->title }}
                        </span>
                    </div>

                    <button
                        wire:click="deleteTodo({{ $todo->id }})"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg hover:opacity-90"
                    >
                        Delete
                    </button>
                </div>
            @empty
                <div class="text-center text-gray-500 py-10">
                    No tasks found.
                </div>
            @endforelse
        </div>
    </div>
</div>
