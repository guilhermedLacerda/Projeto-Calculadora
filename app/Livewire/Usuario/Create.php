<?php

namespace App\Livewire\Usuario;

use App\Models\Usuario;
use Livewire\Component;

class Create extends Component
{

    public $nome_completo;
    public $email_educacional;
    public $rm;
    public $senha;

    public function render()
    {
        return view('livewire.usuario.create');
    }

    public function store (){
        Usuario::create([
            'nome_completo' => $this->nome_completo,
            'email_educacional' => $this->email_educacional,
            'rm' => $this->rm,
            'senha' => $this->senha
        ]);
        
        session()->flash('success', 'Cadastro Realizado');
    }

}
