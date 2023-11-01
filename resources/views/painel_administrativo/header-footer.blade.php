<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBRTEC ADMIN</title>
    <link rel="icon" type="image/x-icon" href="imgs/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
@yield('conteudo')
<footer class="bg-custom text-light text-center py-4">
        <small>© Copyright 2023 - KBR TEC - Todos os Direitos Reservados</small>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-light">
        <div class="modal-content bg-custom">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Usuário</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-wrap row-gap-4">
                <div class="col-6">
                    <div><small>Usuário:</small></div>
                    <div>Admin</div>
                </div>
                <div class="col-6">
                    <div><small>Status:</small></div>
                    <div>Ativado</div>
                </div>
                <div class="col-12">
                    <div><small>E-mail:</small></div>
                    <div>admin@kbrtec.com.br</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>