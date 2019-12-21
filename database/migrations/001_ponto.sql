create table ponto (
	id int not null auto_increment,
	local text null,
	data timestamp not null,
	type text not null,
	rede text null,
	primary key (id)
	);

