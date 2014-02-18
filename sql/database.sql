DROP TABLE IF EXISTS Game_assoc_type ;
DROP TABLE IF EXISTS Game_assoc_language ;
DROP TABLE IF EXISTS Game_assoc_img ;
DROP TABLE IF EXISTS Games ;
DROP TABLE IF EXISTS Languages ;
DROP TABLE IF EXISTS Images ;
DROP TABLE IF EXISTS Game_types ;
DROP TABLE IF EXISTS Editors ;
DROP TABLE IF EXISTS Authors ;
DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS Gender;
DROP TABLE IF EXISTS Permit;


CREATE TABLE Game_types(
	id_game_type INT NOT NULL AUTO_INCREMENT,
	game_type_label VARCHAR(20),
	PRIMARY KEY (id_game_type)
);

CREATE TABLE Images(
	id_img INT NOT NULL AUTO_INCREMENT,
	img_path VARCHAR(20),
	PRIMARY KEY (id_img)
);

CREATE TABLE Languages(
	id_languages INT NOT NULL AUTO_INCREMENT,
	languages_label VARCHAR(20),
	PRIMARY KEY (id_languages)
);

CREATE TABLE Editors(
	id_editor INT NOT NULL AUTO_INCREMENT,
	editor_name VARCHAR(20),
	PRIMARY KEY (id_editor)
);

CREATE TABLE Authors(
	id_author INT NOT NULL AUTO_INCREMENT,
	author_surname VARCHAR(20), -- nom de famille
	author_first_name VARCHAR(20), -- prénom
	PRIMARY KEY (id_author)
);

CREATE TABLE Games(
	id_game INT NOT NULL AUTO_INCREMENT,
	game_name VARCHAR(50),
	game_editor INT,
	game_author INT,
	game_release YEAR,
	game_short_desc TEXT,
	game_img INT,
	game_long_desc TEXT,
	game_min_players INT,
	game_max_players INT,
	game_min_age INT,
	game_duration INT,
	game_price INT,
	PRIMARY KEY (id_game),
	FOREIGN KEY (game_editor) REFERENCES Editors(id_editor),
	FOREIGN KEY (game_author) REFERENCES Authors(id_author),
	FOREIGN KEY (game_img) REFERENCES Images(id_img)
);

CREATE TABLE Game_assoc_type(
	game_type_game INT,
	game_type_type INT,
	PRIMARY KEY (game_type_type, game_type_game),
	FOREIGN KEY (game_type_game) REFERENCES Games(id_game),
	FOREIGN KEY (game_type_type) REFERENCES Game_types(id_game_type)
);

CREATE TABLE Game_assoc_language(
	game_language_game INT,
	game_language_language INT,
	PRIMARY KEY (game_language_language, game_language_game),
	FOREIGN KEY (game_language_game) REFERENCES Games(id_game),
	FOREIGN KEY (game_language_language) REFERENCES Languages(id_languages)
);

CREATE TABLE Game_assoc_img(
	game_img_game INT,
	game_img_img INT,
	PRIMARY KEY (game_img_img, game_img_game),
	FOREIGN KEY (game_img_game) REFERENCES Games(id_game),
	FOREIGN KEY (game_img_img) REFERENCES Images(id_img)
);

CREATE TABLE Gender(
	id_gender INT NOT NULL AUTO_INCREMENT,
	gender_label VARCHAR(30),
	PRIMARY KEY (id_gender)
);

CREATE TABLE Permit(
	id_permit INT NOT NULL AUTO_INCREMENT,
	permit_label VARCHAR(30),
	PRIMARY KEY (id_permit)
);

CREATE TABLE Users(
	id_user INT NOT NULL AUTO_INCREMENT,
	user_surname VARCHAR(30), -- nom de famille
	user_first_name VARCHAR(30), -- prénom
	user_date DATE,
	user_arrival DATE,
	user_gender INT,
	user_permit INT,
	PRIMARY KEY (id_user),
	FOREIGN KEY (user_gender) REFERENCES Gender(id_gender),
	FOREIGN KEY (user_permit) REFERENCES Permit(id_permit)
);

INSERT INTO Game_types VALUES(NULL, "Ambiance");
INSERT INTO Game_types VALUES(NULL, "Rigolade");
INSERT INTO Game_types VALUES(NULL, "Famille");
INSERT INTO Game_types VALUES(NULL, "Stratégie");
INSERT INTO Game_types VALUES(NULL, "Réflexion");
INSERT INTO Game_types VALUES(NULL, "Juniors");
INSERT INTO Game_types VALUES(NULL, "Plateaux");
INSERT INTO Game_types VALUES(NULL, "Cartes");
INSERT INTO Game_types VALUES(NULL, "Dés");
INSERT INTO Game_types VALUES(NULL, "Solo");
INSERT INTO Game_types VALUES(NULL, "Duo");
INSERT INTO Game_types VALUES(NULL, "Amis");

INSERT INTO Languages VALUES(NULL, "Français");
INSERT INTO Languages VALUES(NULL, "Anglais");
INSERT INTO Languages VALUES(NULL, "Allemand");
INSERT INTO Languages VALUES(NULL, "Espagnol");
INSERT INTO Languages VALUES(NULL, "Russe");
INSERT INTO Languages VALUES(NULL, "Italien");

INSERT INTO Editors VALUES(NULL, "Repos production");

INSERT INTO Authors VALUES(NULL, "Bauza", "Antoine");

INSERT INTO Games VALUES(NULL, "7 Wonders", 1, 1, 2010 ,"Petit synopsis", NULL, "Grand synopsis", 2, 7, 10, 30, 40);

INSERT INTO Game_assoc_type VALUES(1,3);
INSERT INTO Game_assoc_type VALUES(1,7);
INSERT INTO Game_assoc_type VALUES(1,8);

INSERT INTO Game_assoc_language VALUES(1,1);

INSERT INTO Gender VALUES(NULL, "Homme");
INSERT INTO Gender VALUES(NULL, "Femme");
INSERT INTO Gender VALUES(NULL, "Unknown");

INSERT INTO Permit VALUES(NULL, "Dieu");
INSERT INTO Permit VALUES(NULL, "Influent");
INSERT INTO Permit VALUES(NULL, "Esclave");

INSERT INTO Users VALUES(NULL, "Pirri", "Eléonore", "11b172c3fad38b44512597a0d6d8e625d4f09c07",'1990-09-27', '2014-02-14', 2, 1);