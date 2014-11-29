--
-- Definição da tabela academico
--
CREATE TABLE academico (
	id int(11) not null auto_increment,
	nome varchar(45) not null,
	endereco varchar(100) not null,
	data_nascimento varchar(100) not null,
	telefone varchar(45),
	email varchar(45),
	departamento_id int(11) not null,
	
	primary key(id),
	foreign key(departamento_id)
) engine=innodb;

--
-- Definição da tabela aluno
--
CREATE TABLE aluno (
	matricula varchar(20) not null,
	curso varchar(45) not null,
	senha varchar(45) not null,
	academico_id int(11) not null,
	
	primary key(matricula),
	foreign key(academico_id)
) engine=innodb;

--
-- Definição da tabela professor
--
CREATE TABLE professor (
	siape int(10) not null,
	senha varchar(45) not null,
	academico_id int(11) not null,
	
	primary key(siape),
	foreign key(academico_id)
);

--
--
--
CREATE TABLE (

);

--
--
--
CREATE TABLE (

);

--
--
--
CREATE TABLE (

);

--
--
--
CREATE TABLE (

);

--
--
--
CREATE TABLE (

);

--
--
--
CREATE TABLE (

);

--
--
--
CREATE TABLE (

);

--
--
--
CREATE TABLE (

);

--
--
--
CREATE TABLE (

);
