--         File to create the database           --

--    sqlite3 cosmodrome.db < cosmodrome.sql     --



CREATE TABLE 'pages' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'title' TEXT NOT NULL,
'page_url_name' TEXT NOT NULL,
'page_path' TEXT NOT NULL,
'position' INTEGER DEFAULT NULL,
'id_parent' INTEGER DEFAULT NULL
);

CREATE TABLE 'components' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'type' TEXT NOT NULL ,
'value' TEXT NOT NULL 
);

CREATE TABLE 'pages_components' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'id_component' INTEGER DEFAULT NULL REFERENCES 'Components' ('id'),
'id_page' INTEGER DEFAULT NULL REFERENCES 'Pages' ('id'),
'position' INTEGER DEFAULT NULL
);
