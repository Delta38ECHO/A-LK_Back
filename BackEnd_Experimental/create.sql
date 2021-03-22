create table authorities (id bigint not null auto_increment, authority varchar(255), username varchar(255), primary key (id)) engine=InnoDB
create table car (id bigint not null auto_increment, make varchar(255), model varchar(255), year varchar(255), primary key (id)) engine=InnoDB
create table customer (id bigint not null auto_increment, city varchar(255), state varchar(255), street_address varchar(255), zip varchar(255), first_name varchar(255), last_name varchar(255), primary key (id)) engine=InnoDB
create table department (department_id bigint not null auto_increment, amount integer not null, head varchar(255), name varchar(255), primary key (department_id)) engine=InnoDB
create table employee (id bigint not null auto_increment, city varchar(255), state varchar(255), street_address varchar(255), zip varchar(255), email varchar(255), first_name varchar(255), last_name varchar(255), department bigint not null, primary key (id)) engine=InnoDB
create table hibernate_sequence (next_val bigint) engine=InnoDB
insert into hibernate_sequence values ( 1 )
insert into hibernate_sequence values ( 1 )
create table part (id bigint not null, price decimal(19,2), supplier varchar(255), primary key (id)) engine=InnoDB
create table project (id bigint not null, car_id bigint not null, customer_id bigint not null, primary key (id)) engine=InnoDB
create table users (username varchar(64) not null, enabled bit not null, password varchar(255), primary key (username)) engine=InnoDB
alter table employee add constraint FKkxx4wtsgsdt16iix2pso0k126 foreign key (department) references department (department_id)
alter table project add constraint FKnxbihe491j153gxaf3r9434lk foreign key (car_id) references car (id) on delete cascade
alter table project add constraint FKj948tru2ilgqxfxsppp9mom5j foreign key (customer_id) references customer (id)
