# CRUD - Loja de Brinquedos

Este é um sistema web simples de gerenciamento (CRUD) para uma loja de brinquedos desenvolvido em **PHP** e **MySQL**, utilizando a extensão **MySQLi** com **Prepared Statements** para segurança contra ataques de SQL Injection.

## 🛠️ Tecnologias Utilizadas

- **PHP**
- **MySQL** (com extensão MySQLi e Prepared Statements)
- **HTML5 & CSS3**

## 📋 Funcionalidades (Requisitos Funcionais)

- **Cadastrar Brinquedo**: Permite registrar novos brinquedos informando nome, categoria, faixa etária, preço e estoque.
- **Listar Brinquedos**: Exibe todos os brinquedos cadastrados no banco de dados em uma tabela.
- **Editar Brinquedo**: Permite alterar as informações de um brinquedo existente.
- **Excluir Brinquedo**: Permite remover um brinquedo do sistema.

## 🚀 Como Executar o Sistema

### Pré-requisitos
Para rodar a aplicação localmente, você precisará de um ambiente servidor local com PHP e MySQL instalado (como **XAMPP**, **WAMP**, **Laragon** ou **LAMP**).

### Passo a Passo

1. **Clonar/Baixar o Projeto**:
   - Baixe ou clone os arquivos do projeto para o diretório de servidor web local (ex: `htdocs` no XAMPP ou `www` no WAMP).

2. **Configurar o Banco de Dados**:
   - Inicie o serviço do **MySQL** no seu painel do XAMPP/WAMP.
   - Abra o **phpMyAdmin** (geralmente em `http://localhost/phpmyadmin`) ou um cliente de banco de dados de sua preferência.
   - Execute o script contido em `database/db.sql` para criar o banco de dados `loja_Brinquedos` e a tabela `Brinquedos`.

3. **Configurar a Conexão**:
   - Verifique o arquivo `infra/connection.php` e ajuste o usuário, senha e porta do banco de dados caso sua configuração local seja diferente do padrão (`localhost`, usuário `root`, sem senha).

4. **Acessar a Aplicação**:
   - Inicie o serviço do **Apache**.
   - Abra o seu navegador e acesse a URL local correspondente à pasta do projeto:
     ```text
     http://localhost/nome-da-sua-pasta/
     ```


RF1: Cadastrar Brinquedo: O sistema deve permitir cadastrar brinquedos informando nome, categoria, faixa etária, preço e estoque.

RF2: Listar Brinquedos: O sistema deve apresentar todos os brinquedos cadastrados.

RF3: Editar Brinquedo: O sistema deve permitir a alteração de informações de brinquedos já cadastrados.

RF4: Excluir Brinquedo: O sistema deve permitir a exclusão de brinquedos já cadastrados.


RNF1: Validação dos Campos: O sistema não deve permitir o cadastro ou edição de brinquedos com nome, categoria, faixa etária, preço ou estoque vazios.