@extends('painel_administrativo.aside')

@section('conteudoAside')
<main class="col h-100 text-light p-4">
    <div class="d-flex align-items-end justify-content-between mb-4">
        <h1 class="h3">Editar Usuário</h1>

        <a href="{{ route('listagemUsuarios') }}" class="btn btn-light">Voltar</a>
    </div>

    <form action="{{ route('putUser', $usuario->id) }}" method="POST" class="bg-custom rounded col-12 py-3 px-4">
        
        @method('PUT')

        <div class="mb-3 row">
            <label for="usuario" class="col-sm-2 col-form-label">Usuário:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control bg-dark text-light border-dark" id="usuario" name="name" value="{{ $usuario->name }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control bg-dark text-light border-dark" id="email" name="email" value="{{ $usuario->email }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control bg-dark text-light border-dark" id="senha" name="password">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="admin" class="col-sm-2 col-form-label">Permissões:</label>
            <div class="col-sm-10">
                <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected disabled value="">Selecione a permissão</option>
                    <option value="0">Padrão</option>
                    <option value="1">Administrador</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
        <label for="admin" class="col-sm-2 col-form-label">Status:</label>
            <div class="col-sm-10">
                <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected disabled value="">Selecione o status</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
        </div>
        @if($mensagem = Session::get('mensagem'))
                {{ $mensagem }}
        @endif
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-light">Salvar</button>
        </div>
    </form>

    <div class="bg-custom rounded overflow-hidden">

    </div>
</main>
@endsection