<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookList extends Component
{
    public $name = "Sujon Ahmed";
    public $books;

    public function mount()
    {
        $this->books = Book::all();
    }

    public function deleteBook(Book $book)
    {
        $book->delete();
        $this->books = Book::all();
    }

    public function render()
    {
        return view('livewire.book-list');
    }
}
