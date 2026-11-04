# API de Reservas de Salas

API REST em Laravel para reservar salas e outros recursos. As rotas ficam em `/api/v1`.

## O que já funciona

- CRUD de recursos (`/api/v1/resources`), com Form Requests na criação e na edição e policy para controlar quem pode alterar.
- Papéis de usuário (`roles`) ligados aos usuários.
- Seeders e factories de usuários, recursos e reservas.
- Rotas de reservas (`/api/v1/reservations`) criadas. A lógica do controller de reservas ainda não foi feita.

## Tecnologias

- Laravel 12 e Sanctum
- MySQL

## Como rodar

```bash
composer install
cp .env.example .env
php artisan key:generate
# crie o banco `api_reservas_salas` no MySQL e confira os dados de acesso no .env
php artisan migrate --seed
php artisan serve
```
