<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Teste Prático de Seleção para Estagiário Back-end (Laravel/PHP) 🔧

Olá candidato(a)!

Seja bem-vindo(a) ao desafio de desenvolvimento Back-end da VOKERÊ. Estamos em busca de um talento para a vaga de Estagiário de Back-end com conhecimentos em Laravel e PHP. Este desafio visa avaliar suas habilidades técnicas no desenvolvimento de aplicações web, bem como sua capacidade de trabalhar com banco de dados.

## Resultado Final: 🌟

![Screenshot from 2024-06-17 00-45-32](https://github.com/piedro404/vokere-back-end-test/assets/88720549/67d41996-2fbc-47d9-9d28-360efaed3898)

![Screenshot from 2024-06-17 00-47-36](https://github.com/piedro404/vokere-back-end-test/assets/88720549/aaca6b6e-abc3-4d4c-aa3d-68fc9e453f17)

![Screenshot from 2024-06-17 00-47-46](https://github.com/piedro404/vokere-back-end-test/assets/88720549/4d528285-dc4a-4ee9-b1e3-ff5f55299fb4)

# Instalação 📱

1. Clone este repositório:
   
```bash
   git clone https://github.com/piedro404/vokere-back-end-test.git
   ```
   
2. Instale as Dependecias
   
```bash
   composer install
   ```

```bash
   npm i
   ```

3. Estruture e Semei o Banco de Dados
   
```bash
   php artisan migrate:fresh
   ```

```bash
   php artisan db:seed
   ```

4. Execulte o Projeto
   
```bash
   npm run dev
   ```
    
## Tarefa: 📋

Desenvolva um sistema de gerenciamento de clientes com as seguintes funcionalidades principais:

### Funcionalidades Gerais
- **Autenticação e Autorização**: Registro e login de usuários. Você pode utilizar algum starter kit do Laravel, como [Sanctum](https://laravel.com/docs/11.x/sanctum), [Jetstream](https://jetstream.laravel.com/2.x/introduction.html) ou [Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze).
- **CRUD de Clientes**: Implementar funcionalidades de Cadastro, Leitura, Atualização e Exclusão de clientes.
- **Cadastro de Endereços**: Permitir o cadastro de endereços associados a cada cliente.
- **Listagem de Clientes**: Listar clientes com opções de busca por nome.

### Detalhamento das Funcionalidades

#### Dados dos Usuários
- Nome
- CPF (Deve validar CPF e garantir unicidade)
- Email
- Senha
- Data de Nascimento (Deve ser formatada)
- Endereço Completo (Rua, Número, Complemento, Bairro, Cidade, Estado, CEP)
- Foto (Opcional)

#### Funcionalidades por Nível de Acesso

**Cliente**
- Atualização de Dados Pessoais (incluindo foto)
- Visualização de Informações

**Gestor**
- Cadastro, Edição e Exclusão de Clientes
- Listagem de Clientes com Filtro por Nome e Data de Cadastro

**Administrador**
- Todas as funcionalidades de um Gestor

#### Listagem de Clientes
- Filtros: Nome e Data de Cadastro
- Colunas: ID, Nome, Data de Nascimento, Data de Cadastro

## Requisitos Técnicos: 🛠️

- Todos os métodos que utilizam banco de dados devem ser implementados utilizando Eloquent.
- As datas devem ser formatadas apropriadamente para exibição.

## Critérios de Avaliação: 📝

- Qualidade do código: organização, legibilidade e boas práticas.
- Funcionalidade: a aplicação deve cumprir os requisitos propostos.
- Uso de Eloquent: deve ser utilizado para todas as operações com banco de dados.

## Entrega: 📦

1. **Código Versionado**: O código deve ser versionado no GitHub e o repositório compartilhado com o usuário `hedleydarsh`.
2. **Commits**: Realize commits separados para possibilitar o acompanhamento da evolução do projeto.
3. **Dump do Banco de Dados**: Inclua um dump do banco de dados, populado e com estrutura de criação de tabelas, índices, e relacionamentos (`BANCODEDADOS.sql`).

## Observações: 📌

Envie o teste finalizado para o email hedley.ti@gmail.com ou adicione o usuário `hedleydarsh` ao repositório.

Estamos ansiosos para ver o seu trabalho e desejamos boa sorte neste desafio!

Atenciosamente,  
VOKERÊ Equipe de Recrutamento
