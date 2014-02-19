DROP TABLE IF EXISTS Gender;
DROP TABLE IF EXISTS Permit;
DROP TABLE IF EXISTS User;

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
	id_user INT NOT NULL AUTO_INCREMENT;
	user_surname VARCHAR(30), -- nom de famille
	user_first_name VARCHAR(30), -- prénom
	user_date DATE,
	user_gender INT,
	user_permit INT,
	PRIMARY KEY (id_user),
	FOREIGN KEY (user_gender) REFERENCES Gender(id_gender),
	FOREIGN KEY (user_permit) REFERENCES Permit(id_permit)
);