# Aula 2 — Ambiente profissional (setup de dev sério)


### 1.PHP + Composer (a base de tudo)

> PHP

Laravel não roda sem PHP.
Ele é o motor.

Versão recomendada:

>    PHP 8.1 ou 8.2

O PHP traz:

    Servidor embutido

    Extensões (openssl, mbstring, pdo, etc.)

🔹 Composer

Composer é o gerenciador de dependências do PHP.

Pensa nele como:

    npm do Node

    pip do Python

O Composer:

    Baixa o Laravel

    Atualiza pacotes

    Resolve dependências

Comando básico:

composer --version

Se isso responde algo, estás pronto.

📌 Sem Composer, não existe Laravel moderno.
### 2. Laravel Installer (atalho de mestre)

O Laravel Installer é só um facilitador.

Ele permite criar projetos assim:

laravel new meu-projeto

Em vez de:

composer create-project laravel/laravel meu-projeto

Ambos funcionam.
O Installer é mais rápido e elegante.

📌 Não é obrigatório, mas é padrão profissional.
### 3. Laragon (ou XAMPP) — teu quartel-general
🔹 Por que Laragon é melhor?

    Leve

    Rápido

    Auto-configura virtual host

    Ideal para Laravel

Laragon já vem com:

    PHP

    MySQL

    Apache/Nginx

    Composer

👉 Para Windows, Laragon é a melhor escolha.
🔹 XAMPP (se não tiver opção)

Funciona, mas:

    Mais pesado

    Configurações manuais

    Menos amigável com Laravel

📌 Se puder escolher: Laragon.
### 4. Criando o primeiro projeto Laravel
Opção A — Com Laravel Installer

laravel new laravel-app
cd laravel-app
php artisan serve

Opção B — Com Composer

composer create-project laravel/laravel laravel-app
cd laravel-app
php artisan serve

Acessa:

http://127.0.0.1:8000

Se aparecer a página do Laravel → ambiente OK ✅


### 5. Estrutura de pastas (quem manda em quem)

Aqui muita gente se perde. Vamos organizar mentalmente.


#### app/
- Coração da aplicação

    Models

    Controllers

    Middlewares

    Lógica do sistema

#### routes/
- Portas de entrada

    web.php → sistema web

    api.php → APIs

Tudo começa aqui.


#### resources/
- Interface

    Views (Blade)

    CSS

    JS

O que o usuário vê.

#### database/
- Dados

    Migrations

    Seeders

    Factories

Controle do banco.

#### public/

- Ponto de acesso

    index.php

    Arquivos públicos

📌 O navegador só enxerga isso.

#### 📁 config/

- Configurações

    App

    Banco

    Mail

    Cache

#### 📁 .env

- Segredos

    DB

    Email

    API keys

📌 Nunca subir isso pro Git.


### 🔄 Quem manda em quem (fluxo real)

```pgsql

Browser
  ↓
public/index.php
  ↓
routes/web.php
  ↓
Controller
  ↓


Model
  ↓
Controller
  ↓
View
```


Se entender isso, 50% do Laravel está dominado.
🧠 Erros comuns (evita desde já)

❌ Mexer direto em vendor/
❌ Colocar lógica em View
❌ Conectar DB manualmente
❌ Ignorar .env
❌ Não usar Git

#### 🛠️ Exercício prático (obrigatório)

1.    Criar um projeto Laravel

2.    Rodar o servidor

3.    Abrir a pasta e:

        Identificar app, routes, resources, public

4.    Alterar o texto da página inicial (sem quebrar nada)


