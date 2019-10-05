CREATE TABLE bloco (
	id_bloco INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_bloco VARCHAR(30)
);

CREATE TABLE sala (
	id_sala INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	numero_sala INT,
	id_bloco INT,
	flag_status BOOLEAN,
	FOREIGN KEY (id_bloco) REFERENCES bloco(id_bloco)
);

CREATE TABLE colaborador (
	id_colaborador INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_colaborador VARCHAR(30),
	email VARCHAR(30),
	senha TEXT,
	nivel ENUM('admin', 'user') DEFAULT 'user',
	flag_status BOOLEAN
);

CREATE TABLE curso (
	id_curso INT AUTO_INCREMENT PRIMARY KEY,
	nome_curso VARCHAR(30),
	flag_status BOOLEAN
);

CREATE TABLE horario (
	id_horario INT AUTO_INCREMENT PRIMARY KEY,
	horario_inicial time,
	horario_final time,
	flag_status BOOLEAN
);

CREATE TABLE agenda (
	id_agenda INT AUTO_INCREMENT PRIMARY KEY,
	id_horario int,
	data date,
	semestre VARCHAR(20),
	id_colaborador INT,
	id_sala INT,
	id_curso INT,
	FOREIGN KEY (id_horario) REFERENCES horario(id_horario),
	FOREIGN KEY (id_colaborador) REFERENCES colaborador(id_colaborador),
	FOREIGN KEY (id_sala) REFERENCES sala(id_sala),
	FOREIGN KEY (id_curso) REFERENCES curso(id_curso)
);

CREATE TABLE categoria (
	id_categoria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_categoria VARCHAR(30),
	icone_categoria VARCHAR(20)
);

CREATE TABLE dispositivo (
	id_dispositivo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_categoria int,
	nome_dispositivo VARCHAR(30),
	observacao VARCHAR(100),
	flag_status BOOLEAN,
	FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

CREATE TABLE reserva (
	id_reserva INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_agenda INT,
	id_dispositivo INT,
	FOREIGN KEY (id_agenda) REFERENCES agenda(id_agenda),
	FOREIGN KEY (id_dispositivo) REFERENCES dispositivo(id_dispositivo)
);

INSERT INTO colaborador (nome_colaborador, email, senha, nivel, flag_status) VALUES ('Aldriano', 'aldriano.silva@docente.unip.br', '202cb962ac59075b964b07152d234b70', 'admin', 1);