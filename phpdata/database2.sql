select * from funcionario2

create table dept (
codigo int not null unique,
nome varchar (255) not null,
localizacão varchar (255) not null
)

insert into dept (codigo,nome,localizacão) values ('1','nikes','brazil').


Create table Funcionario2 (
codigo  INT primary key not null unique ,
primeiro_nome varchar (255) not null,
segundo_nome varchar (255) not null,
ultimo_nome varchar (255) not null,
datanasc date not null,
CPF int unique not null  ,
RG int  not null,
endereco varchar  not null,
CEP  int not null,
Cidade varchar (255) not null,
Fone int (9) not null unique,
codigodept int not null,
funcao varchar (255) not null,
salario int (10) not null
).

INSERT INTO Funcionario2
(codigo,primeiro_nome,segundo_nome,ultimo_nome,datanasc,CPF,RG,endereco,CEP,Cidade,Fone,codigodept,funcao,salario)
Values ('3 ','Raphael','Salvador','Elias','20070107','3','223456789','rua do pica pau amarelo','223123123','Carapicuiba','11972776993','4','criar codigos','2500').

select * from funcionario2 where salario > 2000 order by primeiro_nome,segundo_nome,ultimo_nome