create database hookah character set UTF8 collate utf8_bin;

use hookah;

create table empresa
(
    id int not null auto_increment,
    razao_social varchar(100) not null,
    cnpj varchar(20) not null,
    cep varchar(10) not null,
    logradouro varchar(100) not null,
    nr_local varchar(10) not null,
    complemento varchar(100),
    bairro varchar(100) not null,
    cidade varchar(100) not null,
    uf varchar(2) not null,
    cel_phone varchar(20),
    email varchar(100) not null,
    created_at datetime,
    updated_at datetime,
    primary key (id)
);

create table access_level
(
    id int not null auto_increment,
    title varchar(100) not null,
    description varchar(100),
    created_at datetime,
    updated_at datetime,
    primary key (id)
);

create table system_user
(
    id int not null auto_increment,
    name varchar(100) not null,
    cel_phone varchar(20),
    email varchar(100) not null,
    password varchar(360) not null,
    access_level int not null,
    fk_empresa int not null,
    created_at datetime,
    updated_at datetime,
    primary key (id),
    foreign key (fk_empresa) references empresa(id),
    foreign key (access_level) references access_level(id)
);

create table cliente
(
    id int not null auto_increment,
    nome varchar(100) not null,
    celular varchar(20),
    email varchar(100),
    cep varchar(10),
    rua varchar(100),
    nr varchar(10),
    complemento varchar(100),
    bairro varchar(100),
    cidade varchar(100),
    uf varchar(2),
    empresa_id int not null,
    created_at datetime,
    updated_at datetime,
    primary key (id),
    foreign key (empresa_id) references empresa(id)
);

create table categoria
(
    id int not null auto_increment,
    nome varchar(100) not null,
    empresa_id int not null,
    created_at datetime,
    updated_at datetime,
    primary key (id),
    foreign key (empresa_id) references empresa(id)
);

create table marca
(
    id int not null auto_increment,
    nome varchar(100) not null,
    categoria_id int not null,
    empresa_id int not null,
    created_at datetime,
    updated_at datetime,
    primary key (id),
    foreign key (empresa_id) references empresa(id),
    foreign key (categoria_id) references categoria(id)
);

create table subcategoria
(
    id int not null auto_increment,
    nome varchar(100) not null,
    categoria_id int not null,
    empresa_id int not null,
    created_at datetime,
    updated_at datetime,
    primary key (id),
    foreign key (empresa_id) references empresa(id),
    foreign key (categoria_id) references categoria(id)
);

create table products
(
    id int not null auto_increment,
    name varchar(100) not null,
    value decimal(10,2) not null,
    qtd int not null,
    marca_id int not null,
    subcategoria_id int not null,
    empresa_id int not null,
    created_at datetime,
    updated_at datetime,
    primary key (id),
    foreign key (empresa_id) references empresa(id),
    foreign key (marca_id) references marca(id),
    foreign key (subcategoria_id) references subcategoria(id)
);

create table caixa
(
    id int not null auto_increment,
    abertura decimal(10,2) not null,
    fechamento decimal(10,2) not null,
    is_open boolean not null,
    system_user_id int not null,
    created_at datetime,
    updated_at datetime,
    primary key (id),
    foreign key (system_user_id) references system_user(id)
);


create table vendas
(
    id int not null auto_increment,
    produtos varchar(8000) not null,
    total decimal(10,2) not null,
    troco decimal(10,2) not null,
    dinheiro decimal(10,2) not null,
    debito decimal(10,2) not null,
    credito decimal(10,2) not null,
    desconto decimal(10,2) not null,
    caixa_id int not null,
    created_at datetime,
    updated_at datetime,
    primary key (id),
    foreign key (caixa_id) references caixa(id)
);
