CREATE DATABASE Nixies;

USE Nixies;

CREATE TABLE Usuario
(
idusuario INT NOT NULL AUTO_INCREMENT,
email VARCHAR(256) NOT NULL UNIQUE,
telefone VARCHAR(13) NOT NULL UNIQUE,
nomeusuario VARCHAR (40) NOT NULL UNIQUE,
PRIMARY KEY (idusuario)
);

CREATE TABLE Servidor
(
idserver INT NOT NULL AUTO_INCREMENT,
temaserver VARCHAR(30) NOT NULL,
idusuario INT NOT NULL,
FOREIGN KEY (idusuario) REFERENCES usuario(idusuario),
PRIMARY KEY (idserver)
);

CREATE TABLE Perguntas
(
idpergunta INT NOT NULL AUTO_INCREMENT,
titulo VARCHAR(90) NOT NULL,
PRIMARY KEY (idpergunta)
);

CREATE TABLE Alternativas
(
idalternativa INT NOT NULL AUTO_INCREMENT,
idpergunta INT NOT NULL,
alternativa VARCHAR(20) NOT NULL,
PRIMARY KEY (idalternativa),
FOREIGN KEY (idpergunta) REFERENCES perguntas(idpergunta)
);

CREATE TABLE Respostas
(
idresposta INT NOT NULL AUTO_INCREMENT,
idalternativa INT NOT NULL,
idpergunta INT NOT NULL,
resposta VARCHAR(20) NOT NULL,
PRIMARY KEY (idresposta),
FOREIGN KEY (idpergunta) REFERENCES perguntas(idpergunta),
FOREIGN KEY (idalternativa) REFERENCES alternativas(idalternativa)
);

INSERT INTO Perguntas (titulo)
VALUES ('O que você mais tem consumido?');

INSERT INTO Alternativas (idpergunta, alternativa)
VALUES ('1','Livros');

INSERT INTO Alternativas (idpergunta, alternativa)
VALUES ('1','Séries');

INSERT INTO Alternativas (idpergunta, alternativa)
VALUES ('1','Filmes');

INSERT INTO Alternativas (idpergunta, alternativa)
VALUES ('1','Animes');

INSERT INTO Alternativas (idpergunta, alternativa)
VALUES ('1','Jogos');

INSERT INTO RESPOSTAS (idalternativa, idpergunta, resposta)
VALUES (1, 1, 'Qual seu gênero de livro favorito?');

INSERT INTO RESPOSTAS (idalternativa, idpergunta, resposta)
VALUES (2, 1, 'Qual seu gênero de séries favorito?');

INSERT INTO RESPOSTAS (idalternativa, idpergunta, resposta)
VALUES (3, 1, 'Qual seu gênero de filmes favorito?');

INSERT INTO RESPOSTAS (idalternativa, idpergunta, resposta)
VALUES (4, 1, 'Qual seu gênero de animes favorito?');

INSERT INTO RESPOSTAS (idalternativa, idpergunta, resposta)
VALUES (5, 1, 'Qual seu gênero de jogo favorito?');