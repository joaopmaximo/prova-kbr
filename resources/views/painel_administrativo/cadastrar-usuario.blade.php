@extends('painel_administrativo.aside')

@section('conteudoAside')
<div class="d-flex align-items-end justify-content-between mb-4">
                <h1 class="h3">Cadastrar Usuário</h1>

                <a href="painel.html" class="btn btn-light">Voltar</a>
            </div>

            <form action="{{ route('postUser') }}" method="POST" class="bg-custom rounded col-12 py-3 px-4">
                
                <div class="mb-3 row">
                    <label for="usuario" class="col-sm-2 col-form-label">Usuário:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control bg-dark text-light border-dark" id="usuario" name="name" placeholder="Ex: Admin">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control bg-dark text-light border-dark" id="email" name="email" placeholder="Ex: admin@kbrtec.com.br">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control bg-dark text-light border-dark" id="senha" name="password">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="confSenha" class="col-sm-2 col-form-label">Confirmar Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control bg-dark text-light border-dark" id="confSenha" name="confPass">
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-light">Cadastrar</button>
                </div>
            </form>

            <div class="bg-custom rounded overflow-hidden">

            </div>
@endsection