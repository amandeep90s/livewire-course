<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [];

    // This method will be called when the component is being mounted
    public function mount()
    {
        $this->todos = [
            'Learn Laravel',
            'Learn Vue.js',
            'Build Awesome Apps',
        ];
    }

    // This method will be called when the component is being updated
    public function updated($property, $value)
    {
        $this->$property = strtoupper($value);
    }

    // This method will be called when the todo property is being updated
    public function updatedTodo()
    {
        $this->todo = strtoupper($this->todo);
    }

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
