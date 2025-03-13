<?php

namespace App\Livewire\Administrador;

use App\Models\Administrador;
use Livewire\Component;

class Create extends Component
{
    public $nome_completo;
    public $email_educacional;
    public $cpf;
    public $senha;
        
        public function render()
        {
            return view('livewire.administrador.create');
        }
    
        public function store (){
            Administrador::create([
                'nome_completo' => $this->nome_completo,
                'email' => $this->email_educacional,
                'cpf' => $this->cpf,
                'senha' => $this->senha
            ]);
            
            session()->flash('success', 'Cadastro Realizado');
        }
    
}
