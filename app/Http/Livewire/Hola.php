<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Hola extends Component
{
    public function render()
    {
        $usuarios = User::all();
        return view('livewire.hola', [
            'usuarios' => $usuarios
        ]);
    }
}
