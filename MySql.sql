CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    est_admin BOOLEAN DEFAULT FALSE
);

CREATE TABLE administrateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT UNIQUE,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
);



CREATE TABLE Categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE Articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    image VARCHAR(255),
    date_creation DATE,
    auteur_id INT,
    categorie_id INT,
    FOREIGN KEY (auteur_id) REFERENCES Utilisateurs(id),
    FOREIGN KEY (categorie_id) REFERENCES Categories(id)
);

CREATE TABLE Commentaires (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contenu TEXT NOT NULL,
    date_creation DATE,
    auteur_id INT,
    article_id INT,
    FOREIGN KEY (auteur_id) REFERENCES Utilisateurs(id),
    FOREIGN KEY (article_id) REFERENCES Articles(id)
);

