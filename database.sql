--Tabela produto
CREATE TABLE produto (		  
	id int(11) NOT NULL AUTO_INCREMENT,	  
	nome varchar(255) NOT NULL,		  
	descricao varchar(255) NOT NULL,
	preco decimal(8,2) NOT NULL,	
	quantidade int(11) NOT NULL,
	validade date NOT NULL,
	id_fornecedor int(11) NOT NULL,
	PRIMARY KEY (id)
	);


--Tabela cliente
CREATE TABLE cliente (		  
	id int(11) NOT NULL AUTO_INCREMENT,	  
	nome varchar(255) NOT NULL,
	cpf_cnpj varchar(14) NOT NULL,		  
	email varchar(255) NOT NULL,	
	telefone int(13) NOT NULL,
	PRIMARY KEY (id)
	);

--Tabela fornecedor
CREATE TABLE fornecedor (		  
	id int(11) NOT NULL AUTO_INCREMENT,		  
	nome varchar(255) NOT NULL,
	cpf_cnpj varchar(14) NOT NULL,	  
	email varchar(255) NOT NULL,	
	telefone int(13) NOT NULL,
	PRIMARY KEY (id)
	);

--Tabela pedido
CREATE TABLE pedido (	
	id int(11) NOT NULL AUTO_INCREMENT,	  
	id_produto int(11) NOT NULL,
	id_cliente int(11) NOT NULL,
	quantidade int(11) NOT NULL,
	data datetime NOT NULL,
	PRIMARY KEY (id)
	);