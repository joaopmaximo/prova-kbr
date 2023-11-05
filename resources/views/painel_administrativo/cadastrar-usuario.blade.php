@extends('painel_administrativo.aside')

@section('conteudoAside')
<div class="d-flex align-items-end justify-content-between mb-4">
    <h1 class="h3">Cadastrar Usuário</h1>
</div>
<form action="{{ route('postUser') }}" method="POST" class="bg-custom rounded col-12 py-3 px-4">
    
    <div class="mb-3 row">
        <label for="usuario" class="col-sm-2 col-form-label">Usuário:</label>
        <div class="col-sm-10">
            <input type="text" required class="form-control bg-dark text-light border-dark" id="usuario" name="name" placeholder="Ex: Admin">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
        <div class="col-sm-10">
            <input type="email" required class="form-control bg-dark text-light border-dark" id="email" name="email" placeholder="Ex: admin@kbrtec.com.br">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
        <div class="col-sm-10">
            <input type="password" required class="form-control bg-dark text-light border-dark" id="senha" name="password">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="confSenha" class="col-sm-2 col-form-label">Confirmar Senha:</label>
        <div class="col-sm-10">
            <input type="password" required class="form-control bg-dark text-light border-dark" id="confSenha" name="confPass">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="admin" class="col-sm-2 col-form-label">Permissões:</label>
        <div class="col-sm-10">
            <select id="role" name="role" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected disabled value="0">Selecione a permissão</option>
                <option value="0">Padrão</option>
                <option value="1">Administrador</option>
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="admin" class="col-sm-2 col-form-label">Status:</label>
        <div class="col-sm-10">
            <select id="status" name="status" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected disabled value="1">Selecione o status</option>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
    </div>
    @if($mensagem = Session::get('mensagem'))
        {{ $mensagem }}
    @endif
    @if($errors->any())
        @foreach($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach
    @endif
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-light">Cadastrar</button>
    </div>
</form>

<div class="bg-custom rounded overflow-hidden">

</div>
@endsection