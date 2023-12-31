@extends('painel_administrativo.aside')

@section('conteudoAside')
<div class="d-flex align-items-end justify-content-between mb-4">
                <h1 class="h3">Cadastrar Campeonato</h1>
            </div>

            <form action="{{ route('postCampeonato') }}" method="POST" class="bg-custom rounded col-12 py-3 px-4" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="titulo_campeonato" class="col-sm-2 col-form-label">Título:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control bg-dark text-light border-dark" id="titulo_campeonato" name="titulo_campeonato">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="imagem" class="col-sm-2 col-form-label">Imagem:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file bg-dark text-light border-dark" id="imagem" name="imagem">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="estado" class="col-sm-2 col-form-label">Estado:</label>
                    <div class="col-sm-10">
                        <select id="estado" name="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected disabled value="">Selecione o Estado</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                      </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="cidade" class="col-sm-2 col-form-label">Cidade:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control bg-dark text-light border-dark" id="cidade" name="cidade">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="data_realizacao" class="col-sm-2 col-form-label">Data de Realização:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control bg-dark text-light border-dark" id="data_realizacao" name="data_realizacao">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="sobre_evento" class="col-sm-2 col-form-label">Sobre o evento:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control bg-dark text-light border-dark" id="sobre_evento" name="sobre_evento">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ginasio" class="col-sm-2 col-form-label">Ginasio:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control bg-dark text-light border-dark" id="ginasio" name="ginasio">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="informacoes_gerais" class="col-sm-2 col-form-label">Informações Gerais:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control bg-dark text-light border-dark" id="informacoes_gerais" name="informacoes_gerais">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="entrada_publico" class="col-sm-2 col-form-label">Entrada ao público:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control bg-dark text-light border-dark" id="entrada_publico" name="entrada_publico">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tipo" class="col-sm-2 col-form-label">Tipo:</label>
                    <div class="col-sm-10">
                        <select id="tipo" name="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled value="">Selecione o Tipo</option>
                            <option value="Kimono">Kimono</option>
                            <option value="No-Gi">No-Gi</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="fase" class="col-sm-2 col-form-label">Fase:</label>
                    <div class="col-sm-10">
                        <select id="fase" name="fase" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected disabled value="">Selecione a Fase</option>
                            <option value="Inscrições Abertas">Inscrições Abertas</option>
                            <option value="Chaves de Lutas">Chaves de Lutas</option>
                            <option value="Resultados">Resultados</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">Status:</label>
                    <div class="col-sm-10">
                        <select name="status">
                            <option selected disabled value="">Selecione o status</option>
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