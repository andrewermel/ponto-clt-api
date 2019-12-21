CREATE TABLE funcionarios(
    nome TEXT NOT NULL,
    cpf TEXT NOT NULL,
    id INT NOT NULL AUTO_INCREMENT,
    cargo TEXT NULL,
    contato TEXT NULL,
    administrador BOOLEAN DEFAULT FALSE NOT NULL,
    PRIMARY KEY(id)
);