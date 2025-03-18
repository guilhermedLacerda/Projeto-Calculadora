<div class="mt-5">

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mx-auto my-5 shadow-lg p-3 mb-5 bg-white rounded w-75 " >
        <h3 class="card-header d-flex justify-content-center ">Edição de Aluno</h3>

        <div class="card-body">
            <form wire:submit.prevent="salvar mb-3">
                <div class="mb-3">
                    <label for="nome_completo" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Insira seu nome completo" wire:model.defer="nome">
                </div>
                
                <div class="mb-3">
                    <label for="email_educacional">Email Educacional</label>
                    <input type="text" nome="email_educacional" id="email_educacional" class="form-control" wire:model.defer="email_educacional">
                </div>

                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input type="text" nome="senha" id="senha" class="form-control" wire:model.defer="senha">
                </div>

                <div class="mb-3">
                    <label for="rm">RM</label>
                    <textarea class="form-control" name="rm" id="rm" rows="5" wire:model.defer="rm"></textarea>
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark">Atualizar</button>
                </div>

            </form>
        </div>
    </div>
</div>