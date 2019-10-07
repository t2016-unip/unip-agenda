CREATE SEQUENCE bloco_seq;

CREATE TABLE bloco (
	id_bloco INT NOT NULL DEFAULT NEXTVAL ('bloco_seq') PRIMARY KEY,
	nome_bloco VARCHAR(10),
	descricao TEXT
);

CREATE SEQUENCE sala_seq;

CREATE TABLE sala (
	id_sala INT NOT NULL DEFAULT NEXTVAL ('sala_seq') PRIMARY KEY,
	nome_sala TEXT,
	id_bloco INT,
	flag_status SMALLINT,
	FOREIGN KEY (id_bloco) REFERENCES bloco(id_bloco)
);

CREATE SEQUENCE colaborador_seq;

CREATE TABLE colaborador (
	id_colaborador INT NOT NULL DEFAULT NEXTVAL ('colaborador_seq') PRIMARY KEY,
	nome_colaborador TEXT,
	email TEXT,
	senha TEXT,
	nivel TEXT DEFAULT 'user',
	flag_status BOOLEAN
);

CREATE SEQUENCE curso_seq;

CREATE TABLE curso (
	id_curso INT DEFAULT NEXTVAL ('curso_seq') PRIMARY KEY,
	nome_curso VARCHAR(30),
	qtd_semestre INT,
	flag_status SMALLINT
);

CREATE SEQUENCE horario_seq;

CREATE TABLE horario (
	id_horario INT DEFAULT NEXTVAL ('horario_seq') PRIMARY KEY,
	horario_inicial time(0),
	horario_final time(0)
);

CREATE SEQUENCE categoria_seq;

CREATE TABLE categoria (
	id_categoria INT NOT NULL DEFAULT NEXTVAL ('categoria_seq') PRIMARY KEY,
	nome_categoria VARCHAR(30),
	icone_categoria VARCHAR(20)
);

CREATE SEQUENCE dispositivo_seq;

CREATE TABLE dispositivo (
	id_dispositivo INT NOT NULL DEFAULT NEXTVAL ('dispositivo_seq') PRIMARY KEY,
	id_categoria INT,
	nome_dispositivo VARCHAR(100),
	observacao TEXT,
	flag_status SMALLINT,
	FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

CREATE SEQUENCE agenda_seq;

CREATE TABLE agenda (
	id_agenda INT DEFAULT NEXTVAL ('agenda_seq') PRIMARY KEY,
	id_horario int,
	id_colaborador INT,
	id_sala INT,
	id_curso INT,
	data date,
	semestre INT,
	FOREIGN KEY (id_horario) REFERENCES horario(id_horario),
	FOREIGN KEY (id_colaborador) REFERENCES colaborador(id_colaborador),
	FOREIGN KEY (id_sala) REFERENCES sala(id_sala),
	FOREIGN KEY (id_curso) REFERENCES curso(id_curso)
);

CREATE SEQUENCE agenda_dispositivo_seq;

CREATE TABLE agenda_dispositivo (
	id INT DEFAULT NEXTVAL ('agenda_dispositivo_seq') PRIMARY KEY,
	id_agenda int,
	id_dispositivo INT,
	FOREIGN KEY (id_agenda) REFERENCES agenda(id_agenda),
	FOREIGN KEY (id_dispositivo) REFERENCES dispositivo(id_dispositivo)
);

INSERT INTO colaborador (nome_colaborador, email, senha, nivel, flag_status) VALUES ('Aldriano', 'aldriano.silva@docente.unip.br', '202cb962ac59075b964b07152d234b70', 'admin', '1');
INSERT INTO categoria (nome_categoria) VALUES ('Data show'), ('Computador'), ('Microfone'), ('Retroprojetor'), ('Audio');
INSERT INTO bloco (nome_bloco, descricao) VALUES 
	('A', 'Ciencias Exatas e da Terra'), 
	('B', ' Ciencias da Saude'), 
	('C', 'Ciencias Sociais Aplicadas'), 
	('D', 'Ciencias Humanas'), 
	('E', 'Engenharia/Tecnologia'), 
	('F', 'Ciencias Agrarias');
INSERT INTO horario (horario_inicial, horario_final) VALUES ('19:10:00', '20:25:00');
INSERT INTO horario (horario_inicial, horario_final) VALUES ('20:45:00', '22:00:00');