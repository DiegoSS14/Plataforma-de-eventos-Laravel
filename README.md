## Sobre o projeto

Plataforma de eventos criada como objeto de estudos de Laravel. Permite criar, editar, excluir e consultar eventos.

## Como rodar

1) Instale as dependencias do PHP:

```bash
composer install
```

2) Copie o arquivo de ambiente e gere a chave:

```bash
copy .env.example .env
php artisan key:generate
```

3) Configure o banco em `.env` e rode as migracoes:

Eu criei um arquivo `docker-compose` para subir o banco de dados. Depois disso, basta digitar as informacoes do banco de dados no arquivo `.env` das variaveis de ambiente.

```bash
php artisan migrate
```

4) Suba o servidor local:

```bash
php artisan serve
```
