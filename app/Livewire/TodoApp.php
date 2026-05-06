<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoApp extends Component
{
    public $title = '';

    protected $rules = [
        'title' => 'required|min:2'
    ];

    public function addTodo()
    {
        $this->validate();

        Todo::create([
            'title' => $this->title,
        ]);

        $this->title = '';
    }

    public function toggleComplete($id)
    {
        $todo = Todo::findOrFail($id);

        $todo->completed = !$todo->completed;

        $todo->save();
    }

    public function deleteTodo($id)
    {
        Todo::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.todo-app', [
            'todos' => Todo::latest()->get(),
        ]);
    }
}
