
create table pessoa (
gmail text primary key unique,
senha text not null,
idade number not null,
celular number unique,
id integer not null
)
