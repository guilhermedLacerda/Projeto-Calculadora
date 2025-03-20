<?php

namespace App\Livewire\Usuario;

use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $usuarioId;
    public $nome_completo;
    public $email_educacional;
    public $rm;
    public $senha;

    // vai ser utilizado assim que nosso componente for chamado, vai buscar nossa tarefa por ID, e vai atribuir valor aos campos acima
    public function mount($id){
        $usuario = Usuario::find($id);

        $this->usuarioId = $usuario->id;
        $this->nome_completo = $usuario->nome_completo;
        $this->email_educacional = $usuario->email_educacional;
        $this->rm = $usuario->rm;
        $this->senha = $usuario->senha;
    }

    public function salvar(){
        $usuario = Usuario::find($this->usuarioId);
        $usuario->nome_completo = $this->nome_completo;
        $usuario->email_educacional = $this->email_educacional;
        $usuario->rm = $this->rm;
        $usuario->senha = $this->senha;

        $usuario->save();
        session()->flash('success', 'Aluno Atualizado');
    }

    public function render()
    {
        return view('livewire.usuario.edit');
    }
}
