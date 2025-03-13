<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use Livewire\Component;

class Create extends Component
{
    public $nome_completo;
    public $email_educacional;
    public $cfep;
    public $senha;


    public function render()
    {
        return view('livewire.professor.create');
    }

    public function store (){
        Professor::create([
            'nome_completo' => $this->nome_completo,
            'email_educacional' => $this->email_educacional,
            'cfep' => $this->cfep,
            'senha' => $this->senha
        ]);
        
        session()->flash('success', 'Cadastro Realizado');
    }
}