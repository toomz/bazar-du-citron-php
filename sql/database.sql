DROP TABLE IF EXISTS Assoc_jeu_type ;
DROP TABLE IF EXISTS Assoc_jeu_langue ;
DROP TABLE IF EXISTS Assoc_jeu_img ;
DROP TABLE IF EXISTS Jeux ;
DROP TABLE IF EXISTS Langues ;
DROP TABLE IF EXISTS Images ;
DROP TABLE IF EXISTS Type_jeux ;
DROP TABLE IF EXISTS Editeurs ;
DROP TABLE IF EXISTS Auteurs ;
-- DROP TABLE IF EXISTS Genre ;
-- DROP TABLE IF EXISTS Nationalite ;

CREATE TABLE Type_jeux(
	id_type_jeu INT NOT NULL AUTO_INCREMENT,
	libelle_type_jeu VARCHAR(20),
	PRIMARY KEY (id_type_jeu)
);

CREATE TABLE Images(
	id_img INT NOT NULL AUTO_INCREMENT,
	chemin_img VARCHAR(20),
	PRIMARY KEY (id_img)
);

CREATE TABLE Langues(
	id_langue INT NOT NULL AUTO_INCREMENT,
	libelle_langue VARCHAR(20),
	PRIMARY KEY (id_langue)
);

CREATE TABLE Editeurs(
	id_editeur INT NOT NULL AUTO_INCREMENT,
	nom_editeur VARCHAR(20),
	PRIMARY KEY (id_editeur)
);

CREATE TABLE Auteurs(
	id_auteur INT NOT NULL AUTO_INCREMENT,
	nom_auteur VARCHAR(20),
	prenom_auteur VARCHAR(20),
	PRIMARY KEY (id_auteur)
);

CREATE TABLE Jeux(
	id_jeu INT NOT NULL AUTO_INCREMENT,
	nom_jeu VARCHAR(50),
	editeur_jeu INT,
	auteur_jeu INT,
	annee_sortie_jeu YEAR,
	synopsis_court_jeu TEXT,
	synopsis_long_jeu TEXT,
	joueurs_min INT,
	joueurs_max INT,
	age_jeu INT,
	duree_jeu INT,
	prix_jeu INT,
	PRIMARY KEY (id_jeu),
	FOREIGN KEY (editeur_jeu) REFERENCES Editeurs(id_editeur),
	FOREIGN KEY (auteur_jeu) REFERENCES Auteurs(id_auteur)
);

CREATE TABLE Assoc_jeu_type(
	jeu_type_jeu INT,
	jeu_type_type INT,
	PRIMARY KEY (jeu_type_type, jeu_type_jeu),
	FOREIGN KEY (jeu_type_jeu) REFERENCES Jeux(id_jeu),
	FOREIGN KEY (jeu_type_type) REFERENCES Type_jeux(id_type_jeu)
);

CREATE TABLE Assoc_jeu_langue(
	jeu_langue_jeu INT,
	jeu_langue_langue INT,
	PRIMARY KEY (jeu_langue_langue, jeu_langue_jeu),
	FOREIGN KEY (jeu_langue_jeu) REFERENCES Jeux(id_jeu),
	FOREIGN KEY (jeu_langue_langue) REFERENCES Langues(id_langue)
);

CREATE TABLE Assoc_jeu_img(
	jeu_img_jeu INT,
	jeu_img_img INT,
	PRIMARY KEY (jeu_img_img, jeu_img_jeu),
	FOREIGN KEY (jeu_img_jeu) REFERENCES Jeux(id_jeu),
	FOREIGN KEY (jeu_img_img) REFERENCES Images(id_img)
);