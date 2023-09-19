CREATE TABLE 'pages_components' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'id_component' INTEGER DEFAULT NULL REFERENCES 'Components' ('id'),
'id_page' INTEGER DEFAULT NULL REFERENCES 'Pages' ('id'),
'position' INTEGER DEFAULT NULL
);

INSERT INTO pages_components (id_component, id_page, position) VALUES(1, 1, 1)