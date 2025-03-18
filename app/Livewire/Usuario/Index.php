<?php

namespace App\Livewire\Usuario;

use App\Models\Usuario;
use Livewire\Component;

class Index extends Component
{
    public $usuarioId;

    public $nome_completo;
    public $email_educacional ;
    public $rm;
    public $senha;

    public function render()
    {
        $usuario = Usuario::all();


        return view('livewire.usuario.index', compact('usuario'));
    }

    public function abrirModalVisualizar ($tarefaId) {
        $usuario = Usuario::find($tarefaId);

        if($usuario) {
            $this->nome_completo = $usuario->nome_completo;
            $this->email_educacional = $usuario->email_educacional;
            $this->rm = $usuario->rm;
            $this->senha = $usuario->senha;
        }
    }

    public function abrirModalExclusao($usuarioId){
        $this->usuarioId = $usuarioId;
    }

    public function excluir(){
        if($this->tarefaId){
            Usuario::find($this->tarefaId)->delete();
        }
    }
}
