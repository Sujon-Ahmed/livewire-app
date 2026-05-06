<?php

use Livewire\Component;

new class extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('components.⚡create-book');
    }
};
?>

<div class="bg-gray-800 w-full h-screen">
<div class="container mx-auto p-8">
    <form action="" class="max-w-2xl flex flex-col gap-4 border border-gray-700 rounded-lg p-6">
        <input type="text" class="bg-transparent text-gray-300 border border-gray-600 p-2 rounded focus:border-pink-500 focus:outline-none" placeholder="Book Name" />
        <input type="text" class="bg-transparent text-gray-300 border border-gray-600 p-2 rounded focus:border-pink-500 focus:outline-none" placeholder="Author Name" />
        <textarea name="description" id="" cols="30" rows="5" class="bg-transparent text-gray-300 border border-gray-600 p-2 rounded focus:border-pink-500 focus:outline-none" placeholder="Description"></textarea>
        <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold p-2 rounded">
            Add Book
        </button>
    </form>
</div>
</div>

