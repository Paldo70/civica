CREATE DATABASE agenzia_interinale;

CREATE TABLE candidati(
	email VARCHAR(50) PRIMARY KEY,
    passw VARCHAR(30) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    dataNascita DATE NOT NULL,
    telefono VARCHAR(50) NOT NULL,
);

CREATE TABLE regioni(
    ID_regione INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL   
);

CREATE TABLE ambiti(
    ID_ambito INT AUTO_INCREMENT PRIMARY KEY,
    ambito VARCHAR(30) NOT NULL
);

CREATE TABLE aziende(
    email VARCHAR(30) PRIMARY KEY,
    passw VARCHAR(30) NOT NULL,
    nome VARCHAR(30) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    indirizzo VARCHAR(50) NOT NULL,
    n_dipendenti INT(50) NOT NULL,
    regione_id INT NOT NULL,
    ambito_id INT NOT NULL,
    FOREIGN KEY (regione_id) REFERENCES regioni(ID_regione),
    FOREIGN KEY (ambito_id) REFERENCES ambiti(ID_ambito)
);

CREATE TABLE offerteDiLavoro(
	ID_offerta INT AUTO_INCREMENT PRIMARY KEY,
    descrizione VARCHAR(255) NOT NULL,
    inizio DATE NOT NUll,
    fine DATE,
    postiDisponibili INT(50) NOT NULL,
    email VARCHAR(30) NOT NULL,
    FOREIGN KEY(email) REFERENCES aziende(email)
);

CREATE TABLE richieste(
	id_offerta INT NOT NULL,
    email VARCHAR(30) NOT NULL,
    data_richiesta DATE NOT NULL,
    FOREIGN KEY(id_offerta) REFERENCES offerteDiLavoro(ID_offerta),
    FOREIGN KEY(email) REFERENCES candidati(email)
);


INSERT INTO regioni (nome) 
  ('Lazio'),
  ('Lombardia'),
  ('Campania'),
  ('Sicilia'),
  ('Emilia-Romagna'),
  ('Veneto'),
  ('Piemonte'),
  ('Toscana'),
  ('Puglia'),
  ('Calabria'),
  ('Sardegna'),
  ('Liguria'),
  ('Marche'),
  ('Abruzzo'),
  ('Friuli-Venezia Giulia'),
  ('Trentino-Alto Adige'),
  ('Umbria'),
  ('Basilicata'),
  ('Molise'),
  ("Val d'Aosta");

INSERT INTO ambiti(ambito)
('meccanica'),
('informatica'),
('elettronica'),
('sociale'),
('marketing'),
('sicurezza'),
('psicologia'),
('biologia'),
('medicina');




 
