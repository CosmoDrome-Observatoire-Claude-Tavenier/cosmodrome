-- Commande initialisation de la base de données : --

--    sqlite3 cosmodrome.db < cosmodrome.sql     --



CREATE TABLE 'pages' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'title' VARCHAR(80) NOT NULL  DEFAULT 'NULL',
'position' INTEGER DEFAULT NULL,
'id_parent' INTEGER DEFAULT NULL
);

CREATE TABLE 'components' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'type' VARCHAR(80) NOT NULL  DEFAULT 'NULL',
'value' MEDIUMTEXT NOT NULL  DEFAULT 'NULL'
);

CREATE TABLE 'pages_components' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'id_component' INTEGER DEFAULT NULL REFERENCES 'Components' ('id'),
'id_page' INTEGER DEFAULT NULL REFERENCES 'Pages' ('id'),
'position' INTEGER DEFAULT NULL
);
