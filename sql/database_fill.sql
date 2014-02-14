INSERT INTO Type_jeux VALUES(NULL, "Ambiance");
INSERT INTO Type_jeux VALUES(NULL, "Rigolade");
INSERT INTO Type_jeux VALUES(NULL, "Famille");
INSERT INTO Type_jeux VALUES(NULL, "Stratégie");
INSERT INTO Type_jeux VALUES(NULL, "Réflexion");
INSERT INTO Type_jeux VALUES(NULL, "Juniors");
INSERT INTO Type_jeux VALUES(NULL, "Plateaux");
INSERT INTO Type_jeux VALUES(NULL, "Cartes");
INSERT INTO Type_jeux VALUES(NULL, "Dés");
INSERT INTO Type_jeux VALUES(NULL, "Solo");
INSERT INTO Type_jeux VALUES(NULL, "Duo");
INSERT INTO Type_jeux VALUES(NULL, "Amis");

INSERT INTO Langues VALUES(NULL, "Français");
INSERT INTO Langues VALUES(NULL, "Anglais");
INSERT INTO Langues VALUES(NULL, "Allemand");
INSERT INTO Langues VALUES(NULL, "Espagnol");
INSERT INTO Langues VALUES(NULL, "Russe");
INSERT INTO Langues VALUES(NULL, "Italien");

INSERT INTO Editeurs VALUES(NULL, "Repos production");

INSERT INTO Auteurs VALUES(NULL, "Bauza", "Antoine");

INSERT INTO Jeux VALUES(NULL, "7 Wonders", 1, 1, 2010 ,"Petit synopsis", "Grand synopsis", 2, 7, 10, 30, 40);

INSERT INTO Assoc_jeu_type VALUES(1,3);
INSERT INTO Assoc_jeu_type VALUES(1,7);
INSERT INTO Assoc_jeu_type VALUES(1,8);

INSERT INTO Assoc_jeu_langue VALUES(1,1);