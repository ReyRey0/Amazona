# <h1 align="center">AMAZONA</h1>
<p align="center"> Este projeto consiste em demonstrar o controle de manipulação de dados ultilizando Mysql e PHP
  <br>
  sendo AMAZONA um nome fictício de uma loja de roupas femnina </p>
  
## Requisitos
<p align="center"> para a execução deste projeto será necessária as seguintes ferramentas </p>

- Localhost
- phpMyAdim
- criar um banco de dados 
```bash
CREATE DATABASE amazona;
USE amazona;
CREATE TABLE estoque
(
pro_cod int not null,
pro_nome varchar(50) not null,
pro_quant int not null,
pro_val double not null,
pro_data date not null,
pro_cli varchar(50) not null,
pro_cate varchar(50) not null,
PRIMARY KEY(pro_cod)
);
)
```
## Guia de uso
<p>
Ao iniciar o projeto, em sua primeira tela (index) haverá dois botões, CADASTRO e TABELA.
Sendo CADASTRO uma tela que conterá um formulario a ser preenchido, e TABELA sendo todos os dados cadastrados do banco de dados exibidos em uma tabela.
</p>
<p>
 Após o envio do formulário, o registro será exibido na pagina estoque (ou seja, acessando o botão TABELA na pagina index)
  <br>
  Na página estoque poderá editar os dados já registrados, excluilos ou pesquisar por eles.
</p>

### Pesquisar

<p>
  a barra de pesquisa corresponderá para os seguintes dados pesquisados:
  
- codigo do produto
- nome do produto
- cliente
- categoria 
</p>

### Funcionalidades

- [x] Cadastro de produtos
- [x] Editar dados do banco de dados
- [x] Pesquisa de registros
- [x] Excluir registros
- [x] Validação de campos

## Authors

- [@ReyRey0](https://www.github.com/ReyRey0)
