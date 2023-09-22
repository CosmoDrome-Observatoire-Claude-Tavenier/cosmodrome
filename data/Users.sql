CREATE TABLE 'Users' (
'id' INTEGER DEFAULT NULL PRIMARY KEY AUTOINCREMENT,
'username' TEXT UNIQUE NOT NULL ,
'password' TEXT NOT NULL 
);


INSERT INTO Users('username','password') VALUES('admin','admin');