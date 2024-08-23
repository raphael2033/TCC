create table dept(
codigo int not null unique,
nome varchar (255) not null,
localizacao varchar (255) not null);
Create table Funcionario2 (
codigo  INT primary key not null unique ,
primeiro_nome varchar (255) not null,
segundo_nome varchar (255) not null,
ultimo_nome varchar (255) not null,
datanasc date not null,
CPF int unique not null,
RG int  not null,
endereco varchar  not null,
CEP  int not null,
Cidade varchar (255) not null,
Fone int (9) not null unique,
codigodept int not null,
funcao varchar (255) not null,
salario int (10) not null
);
SELECT * FROM DEPT;
select * from funcionario2 where salario > 2000 order by primeiro_nome,segundo_nome,ultimo_nome;
insert into dept (codigo,nome,localizacao) values ('3','nikes','brazil');
INSERT  INTO  Funcionario2
(codigo,primeiro_nome,segundo_nome,ultimo_nome,datanasc,CPF,RG,endereco,CEP,Cidade,Fone,codigodept,funcao,salario)
Values ('5 ','Raphael','Salvador','Elias','20070107','4','223456789','rua do pica pau amarelo','223123123','Carapicuiba','11972776995','5','criar codigos','2500');
INSERT  INTO  Funcionario2
(codigo,primeiro_nome,segundo_nome,ultimo_nome,datanasc,CPF,RG,endereco,CEP,Cidade,Fone,codigodept,funcao,salario)
Values ('6 ','rapael','Salvador','Elias','20070107','5','223456789','rua do pica pau amarelo','223123123','Carapicuiba','11972776996','6','criar codigos','2500');
INSERT  INTO  Funcionario2
(codigo,primeiro_nome,segundo_nome,ultimo_nome,datanasc,CPF,RG,endereco,CEP,Cidade,Fone,codigodept,funcao,salario)
Values ('7 ','rafael','Salvador','Elias','20070107','6','223456789','rua do pica pau amarelo','223123123','Carapicuiba','11972776997','7','criar codigos','2500');
INSERT  INTO  Funcionario2
(codigo,primeiro_nome,segundo_nome,ultimo_nome,datanasc,CPF,RG,endereco,CEP,Cidade,Fone,codigodept,funcao,salario)
Values ('8 ','rhaphel','Salvador','Elias','20070107','7','223456789','rua do pica pau amarelo','223123123','Carapicuiba','11972776998','8','criar codigos','2500');
INSERT  INTO  Funcionario2
(codigo,primeiro_nome,segundo_nome,ultimo_nome,datanasc,CPF,RG,endereco,CEP,Cidade,Fone,codigodept,funcao,salario)
Values ('9 ','el','salvado','Elias','20070107','8','223456789','rua do pica pau amarelo','223123123','Carapicuiba','11972776999','9','criar codigos','2500');


