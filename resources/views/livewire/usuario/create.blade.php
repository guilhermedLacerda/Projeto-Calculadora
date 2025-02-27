<div class="mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card mx-auto my-5 shadow-lg p-3 mb-5 bg-white rounded" style="width: 48rem;">
        
            <h3 class="card-header d-flex justify-content-center">Cadastrar-se</h3>
          


        <div class="card-body ">
            <p class="d-flex justify-content-center mb-0"><ins><strong>Usuários</strong></ins></p>
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome_completo" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control border-radius: 50px; " id="nome" name="nome_completo" placeholder="Ex.: Guilherme dos..." wire:model.defer="nome_completo">
                </div>

                <div class="mb-3">
                    <label for="email_educacional">Email Educacional</label>
                    <input type="text" name="email_educacional" id="email_educacional" class="form-control" wire:model.defer="email_educacional" placeholder="Ex.: guilherme.lacerda@gmail.com">
                </div>

                <div class="mb-3">
                    <label for="rm">RM</label>
                    <input class="form-control" name="rm" id="rm" rows="5" wire:model.defer="rm" placeholder="Ex.: 1234."></input>
                </div>

                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input class="form-control" name="senha" id="senha" rows="5" wire:model.defer="senha" placeholder="Ex.: 12345678ABC"></input>
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark w-75 p-3">Cadastrar</button>
                </div>
                
                <div class="d-flex justify-content-center">
                    <p class="mx-1">cadastrar-se como</p>  <a href="#" target="_blank" class="text-primary ml-5">Administrador</a>
                </div>
            </form>

            
        </div>
    </div>
    
    
  
</div>
