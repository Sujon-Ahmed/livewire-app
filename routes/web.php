<?php

use App\Livewire\BookList;
use Illuminate\Support\Facades\Route;

Route::get('/', BookList::class);
Route::livewire('/books/create', 'create-book');
Route::livewire('/card', 'card');
