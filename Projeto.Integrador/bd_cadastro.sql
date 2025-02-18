CREATE DATABASE cadastro;

USE cadastro;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    email VARCHAR(100) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    complemento VARCHAR(255),
    tipo_cadastro VARCHAR(50) NOT NULL, -- "colaborador", "usuario", "padrinho", "voluntario"
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
