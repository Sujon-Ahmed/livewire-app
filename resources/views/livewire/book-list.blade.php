<div class="bg-gray-800">
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold text-pink-500 mb-6">Hi, <form wire:submit="$refresh"><input type="text" wire:model.live.debounce.500ms="name" class="bg-transparent text-gray-300 focus:border-transparent focus:outline-none" value="{{ $name }}"  placeholder="Enter your name" /></form></h1>
    <div class="my-6 text-white gap-4 flex">
        <a  @class(['active text-pink-500' => request()->is('/')]) href="/">Book List</a>
        <a  @class(['active text-pink-500' => request()->is('/books/create')]) href="/books/create">Add a Book</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($books as $book)
            <div wire:key="{{ $book->id }}" class="bg-gray-700 rounded-lg shadow-md p-4 relative">
                <button wire:click="deleteBook({{ $book->id }})" class="bg-pink-500 hover:bg-pink-700 text-white font-bold p-2 rounded absolute bottom-2 right-2 text-xs">
                    <i class="ph ph-trash"></i>
                </button>
                <h2 class="text-xl font-semibold text-white mb-2">{{ $book->name }}</h2>
                <p class="text-semibold text-gray-400 mb-4">{{ $book->author }}</p>
            </div>
        @endforeach
    </div>
</div>
</div>
