# Prova KBR Dev Back-end

ajustar conexão com o banco de dados no arquivo .env.example (renomear para .env)

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={NAME_DB}
DB_USERNAME={USERNAME_DB}
DB_PASSWORD={PASSWORD_DB}
```

## Instalar dependências e preparar banco de dados
* Com o terminal na raiz do projeto, executar comandos:
```powershell
composer install
php artisan key:generate 
php artisan migrate --seed

```

* iniciar aplicação:
```powershell
php artisan serve

```

## Acessos
Login Admin:  
acessar: localhost:8000/painel-administrativo/login  
email: admin@admin.com  
senha: admin

Login Usuário Padrão:  
acessar: localhost:8000/painel-administrativo/login  
email: joao.silva@example.com  
senha: senha123

Login Atleta:  
acessar: localhost:8000/login  
email: josias@josias.com  
senha: josias
