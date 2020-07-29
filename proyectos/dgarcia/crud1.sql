use phppanamericanos;

create table deportes(
	id int not null auto_increment primary key,
	nombre_deporte varchar(100) not null,
	descripcion varchar(500) not null,
	historia varchar(500) not null
);

insert into deportes (id, nombre_deporte, descripcion, historia) values (1, "tenis", "bueno para la salud", "es de 1999");

select * from deportes;

