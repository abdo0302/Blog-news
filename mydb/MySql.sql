CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    image VARCHAR(255) ,
    est_admin BOOLEAN DEFAULT FALSE
);
INSERT INTO utilisateurs (nom,email,mot_de_passe,image,est_admin) VALUES("admin","amin@gmail.com","admin","p11993131_e_v13_ab.jpg",1);
INSERT INTO Categories (nom,email,mot_de_passe,image,est_admin) VALUES("salwa","salwa21@gmail.com","salwa.com44h","images.jpg",0);
INSERT INTO Categories (nom,email,mot_de_passe,image,est_admin) VALUES("salma","salma35@gmail.com","salma.com4jhmmh","Girl-Download-PNG.png",0);
INSERT INTO Categories (nom,email,mot_de_passe,image,est_admin) VALUES("amin","amin2@gmail.com","amin89h","55.jpg",0);

CREATE TABLE administrateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT UNIQUE,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
);



CREATE TABLE Categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);
INSERT INTO Categories (nom) VALUES("Sport");
INSERT INTO Categories (nom) VALUES("Science & Tech");
INSERT INTO Categories (nom) VALUES("Business");
INSERT INTO Categories (nom) VALUES("Recent articles");
INSERT INTO Categories (nom) VALUES("Specialized categories");
INSERT INTO Categories (nom) VALUES("News and events");

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



CREATE TABLE ArticleLikes (
    LikeID INT PRIMARY KEY AUTO_INCREMENT,
    ArticleID INT,
    UserID INT,
    FOREIGN KEY (ArticleID) REFERENCES Articles(id),
    FOREIGN KEY (UserID) REFERENCES utilisateurs(id)
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

