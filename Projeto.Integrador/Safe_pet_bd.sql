use usuarios_pet;

update usuarios
set perfil = 'Adm'
where id_usuario = 1

-- Tabela
CREATE TABLE IF NOT EXISTS usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
nome_completo VARCHAR(255) NOT NULL,
idade INT NOT NULL,
telefone VARCHAR(20) NOT NULL,
cpf VARCHAR(14) NOT NULL,
email VARCHAR(255) NOT NULL,
endereco TEXT NOT NULL,
complemento TEXT
);