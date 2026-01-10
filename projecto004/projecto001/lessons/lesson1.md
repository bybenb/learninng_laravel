# Aula 1 — O que é Laravel (sem romantismo)


### 1. O que é um framework (na vida real)

Pensa assim: 👉 Framework é um esqueleto pronto para construir sistemas. Ele te entrega: Estrutura, Regras, Padrões e Ferramentas prontas.

Sem framework (PHP puro): Tu decides tudo, Repete código e Organiza do teu jeito (ou bagunça),

Com framework (Laravel): O caminho já está desenhado, Menos erros, Mais velocidade e Código legível por qualquer dev.

Framework não é mágica, é disciplina + produtividade.

### 2. MVC na prática

MVC = Model – View – Controller

🔹 Model: Representa o dado; Fala com o banco; Regra de negócio básica.

Exemplo:
```php
User
Product
Order
```

🔹 View: O que o usuário vê; HTML + Blade; Zero lógica pesada.

Exemplo:
```blade
<h1>Olá, {{ $user->name }}</h1>
```


🔹 Controller: O cérebro; Recebe requisição; Decide o que fazer; Chama Model; e Retorna View ou JSON.

Fluxo real:

```sql
Usuário → Rota → Controller → Model → Controller → View
```

📌 Regra de ouro:
Se misturar tudo no mesmo arquivo, o projeto morre cedo.



### 3. Laravel vs PHP puro (sem dó)


> PHP puro

✔ Controle total
❌ Muito código repetido
❌ Segurança manual
❌ Escala difícil
❌ Manutenção dolorosa

Exemplo comum:

+ Conexão manual com DB
+    SQL espalhado
+    Login inseguro
+    Código gigante num arquivo só

> Laravel

✔ Estrutura pronta
✔ Segurança embutida
✔ ORM poderoso (Eloquent)
✔ Autenticação pronta
✔ Código limpo
✔ Escalável


PHP puro serve para aprender fundamentos. Laravel serve para ganhar dinheiro e trabalhar em equipe. 

### 4. Onde Laravel é usado no mundo real?

Laravel não é “framework de tutorial”. Ele roda coisa grande: Sistemas acadêmicos, ERPs, CRMs, APIs para apps mobile, Backends para React / Vue, Marketplaces, Fintechs, Startups, Sistemas governamentais, e mais. Quem usa são: Startups, Empresas médias, Agências e Freelancers profissionais.

Em África e fora dela, Laravel é "👉 Backend rápido + confiável + barato", Perfeito para: Projetos próprios, Freelance, MVPs e Sistemas internos.

Laravel é ferramenta. Quem faz a diferença é como tu pensas o sistema.






--- 
##### ⚙️ Exercício prático (simples, mas importante)

No papel ou bloco de notas, responde:

    1. O que muda quando um projeto cresce?

    2. Por que misturar HTML + SQL + PHP no mesmo arquivo é um problema?

    3. Onde MVC ajuda na manutenção?
