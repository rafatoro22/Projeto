/*-----BANCO DE DADOS------*/
create database loja;
use loja;
 
	create table Cliente(
 
		idCliente INT AUTO_INCREMENT,
		nome VARCHAR(60) NOT NULL,
		sobrenome VARCHAR(60),
		email VARCHAR(60) NOT NULL,
		sexo VARCHAR(9),
		numero VARCHAR(11),
		cpf VARCHAR(11),
		senha VARCHAR(60) NOT NULL,
		data datetime,
		endereco VARCHAR (100) NOT NULL,
		PRIMARY KEY(idCliente)
 
	)engine = innoDB;

	INSERT into cliente(nome,sobrenome,email,sexo,numero,cpf,senha,data,endero)
				values("Rafaela","Toro","rafaela@toro.com","F",9983434,123234,"123123423","2003-04-02");


-- ---------------------------------------------------------------------------------------------------------------

-- tabela admin

create table Admin(
 
		idAdmin INT AUTO_INCREMENT,
		nome VARCHAR(60) NOT NULL,
		sobrenome VARCHAR(60),
		email VARCHAR(60) NOT NULL,
		sexo VARCHAR(9),
		senha VARCHAR(60) NOT NULL,
		PRIMARY KEY(idAdmin)
 
	)engine = innoDB;
 

INSERT into Admin
(nome,sobrenome,email,sexo,senha)
				values("Rafaela","Tôro","tororafaela6@gmail.com","F", "123456");
 
INSERT into Admin
(nome,sobrenome,email,sexo, senha)
				values("Jullia","Silverio","jullia@silverio.com","F","123456");
INSERT into Admin
(nome,sobrenome,email,sexo, senha)
				values("Echilley","Oliveira","echilley@oliveira.com","F","123456");

-- -----------------------------------------------------------------------------------------------------------------

-- tabela produto
create table produto(
 
	idProduto INT AUTO_INCREMENT,
	marca VARCHAR(60) NOT NULL,
	peca VARCHAR(101) NOT NULL,
	preco DECIMAL(5,2),
	quantidade INT(100),
	
	PRIMARY KEY(idProduto)
 
	)engine = innoDB;

-- ---------------------------------------------------------------------------------------------------------

-- tabela compra

Create table compra (
	
	idCompra INT AUTO_INCREMENT,
	quantidade INT(20),
	cliente INT NOT NULL,
	produto INT NOT NULL,
	PRIMARY KEY (idCompra),
	FOREING KEY (produto) REFERENCES produto(idProduto),
	FOREING KEY (cliente) REFERENCES cliente(idCliente)
) ) engine = innodb;
 
-- -----------------------------------------------------------------------------------------------------------
 


 
