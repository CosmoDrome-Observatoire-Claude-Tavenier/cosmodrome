CREATE TABLE 'Pages' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'title' TEXT NOT NULL,
'page_url_name' TEXT NOT NULL,
'position' INTEGER DEFAULT NULL,
'id_parent' INTEGER DEFAULT NULL
);

INSERT INTO Pages VALUES (1, 'Accueil', '/', 1, NULL);
INSERT INTO Pages VALUES (2, 'Installations', 'installations', 2, NULL);
INSERT INTO Pages VALUES (3, 'Prestations', 'prestations', 3, NULL);
INSERT INTO Pages VALUES (4, 'Hébergements', 'hebergement', 4, NULL);
INSERT INTO Pages VALUES (5, 'Situation', 'situation', 5, NULL);
INSERT INTO Pages VALUES (6, 'Construction', 'construction', 6, NULL);
INSERT INTO Pages VALUES (7, 'Financeurs', 'financeurs', 7, NULL);
INSERT INTO Pages VALUES (8, 'Partenaires', 'partenaires', 8, NULL);
INSERT INTO Pages VALUES (9, 'Contact', 'contact', 9, NULL);
INSERT INTO Pages VALUES (10, 'Liens', 'liens', 10, NULL);
INSERT INTO Pages VALUES (11, 'Signalétique', 'signaletique', 1, 2);
INSERT INTO Pages VALUES (12, 'Coupoles', 'coupoles', 2, 2);
INSERT INTO Pages VALUES (13, 'T406', 't406', 3, 2);
INSERT INTO Pages VALUES (14, 'T356', 't356', 4, 2);
INSERT INTO Pages VALUES (15, 'T305', 't305', 5, 2);
INSERT INTO Pages VALUES (16, 'Jumelles', 'jumelles', 6, 2);
INSERT INTO Pages VALUES (17, 'PST', 'pst', 7, 2);
INSERT INTO Pages VALUES (18, 'L120', 'l120', 8, 2);
INSERT INTO Pages VALUES (19, 'La voie céleste', 'la-voie-celeste', 1, 3);
INSERT INTO Pages VALUES (20, 'Un coup d'oeil vers le ciel', 'un-coup-d-oeil-vers-le-ciel', 2, 3);
INSERT INTO Pages VALUES (21, 'Astromobile', 'astromobile', 3, 3);
INSERT INTO Pages VALUES (22, 'La nuit des étoiles', 'la-nuit-des-etoiles', 4, 3);
INSERT INTO Pages VALUES (23, 'Jour de la nuit', 'jour-de-la-nuit', 5, 3);