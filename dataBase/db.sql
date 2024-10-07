CREATE DATABASE plastique;
USE plastique;

-- Create users table
CREATE TABLE users(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(50),
    motPass VARCHAR(50),
    age VARCHAR(50),
    pays VARCHAR(50)
);

-- Create employes table
CREATE TABLE employes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    identifiant VARCHAR(50) UNIQUE,
    motPass VARCHAR(50),
    nom VARCHAR(50),
    prenom VARCHAR(50),
    age INT,
    phone BIGINT,
    email VARCHAR(50),
    pays VARCHAR(50),
    designation VARCHAR(50)
);

-- Insert valid data into employes table
INSERT INTO employes (id, identifiant, motPass, nom, prenom, age, phone, email, pays, designation)
VALUES (NULL, 'BA300', 'BA300', 'Mohamed', 'BELKAHLA', 19, 12345678, 'mohamed@gmail.com', 'casa', 'stagiaire'),
       (NULL, 'BA301', 'BA301', 'Zakaria', 'ELFERROUNI', 18, 123456789, 'zakaria@gmail.com', 'Rabat', "chef d'équipe de stage"),
       (NULL, 'BA302', 'BA302', 'Mouad', 'LAMSILA', 15, 123456789, 'mouad@gmail.com', 'madyouna', 'chef R.H'),
       (NULL, 'R130020326', 'BH653029', 'zakaria', 'EL FERROUNI', 19, 678779177, 'ZAKARIAELFERROUNI@gmail.com', 'casablanca', 'software Developer'),
       (NULL, 'R130020327', 'BH653030', 'aymen', 'EL FERROUNI', 20, 678779178, 'aymenELFERROUNI@gmail.com', 'casablanca', 'software Developer'),
       (NULL, 'R130020328', 'BH653031', 'amine', 'EL FERROUNI', 21, 678779179, 'amineELFERROUNI@gmail.com', 'rabat', 'software Developer'),
       (NULL, 'R130020329', 'BH653032', 'adam', 'EL FERROUNI', 22, 678779180, 'adamELFERROUNI@gmail.com', 'tanger', 'software Developer'),
       (NULL, 'R130020330', 'BH653033', 'ahmed', 'EL FERROUNI', 23, 678779181, 'ahmedELFERROUNI@gmail.com', 'casablanca', 'software Developer');

-- Create heuresTravail table with a valid foreign key
CREATE TABLE heuresTravail(
    Id_heurTr INT AUTO_INCREMENT PRIMARY KEY,
    debut_semaine VARCHAR(50),
    fin_semaine VARCHAR(50),
    heures_totale INT,
    heures_TCA INT,
    heures_CP INT,
    heures_TKM INT,
    heures_HDPE INT,
    identifiant_employe VARCHAR(50) NOT NULL,
    CONSTRAINT fk_identifiant FOREIGN KEY (identifiant_employe) REFERENCES employes(identifiant)
);

-- Create contable table
CREATE TABLE contable(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_complete VARCHAR(50),
    username VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(50)
);

-- Insert data into contable table
INSERT INTO contable (id, username, password) 
VALUES (NULL, 'C1', 'contable1'),
       (NULL, 'C2', 'contable2'),
       (NULL, 'C3', 'contable3'),
       (NULL, 'C4', 'contable4');
