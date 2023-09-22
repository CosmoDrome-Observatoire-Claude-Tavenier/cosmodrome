CREATE TABLE 'Pages' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'title' TEXT NOT NULL,
'url_path' TEXT NOT NULL,
'position' INTEGER DEFAULT NULL,
'parent_id' INTEGER DEFAULT NULL,
'is_cta' INTEGER DEFAULT NULL
);

INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Accueil', '/', 1, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Installations', '/installations', 2, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Signalétique', '/signaletique', 1, 2);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Coupoles', '/coupoles', 2, 2);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('T406', '/t406', 3, 2);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('T356', '/t356', 4, 2);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('T305', '/t305', 5, 2);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Jumelles', '/jumelles', 6, 2);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('PST', '/pst', 7, 2);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('L120', '/l120', 8, 2);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Prestations', '/prestations', 3, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('La voie céleste', '/la-voie-celeste', 1, 11);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Un coup d''oeil vers le ciel', '/un-coup-d-oeil-vers-le-ciel', 2, 11);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Astromobile', '/astromobile', 3, 11);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('La nuit des étoiles', '/la-nuit-des-etoiles', 4, 11);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Jour de la nuit', '/jour-de-la-nuit', 5, 11);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Hébergements', '/hebergement', 4, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Situation', '/situation', 5, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Construction', '/construction', 6, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Financeurs', '/financeurs', 7, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Partenaires', '/partenaires', 8, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Contact', '/contact', 9, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Liens', '/liens', 10, NULL);
INSERT INTO Pages (title, url_path, position, parent_id) VALUES ('Mentions Légales', '/mentions-legales', NULL, NULL);