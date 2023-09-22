<?php
echo "Deleting old database...\n";
sleep(1);
system("rm -f database.db");
echo "Creating database...\n";
echo "Creating \"Pages\"...\n";
sleep(1);
system("sqlite3 database.db < Pages.sql");
echo "Creating \"Components\"...\n";
sleep(1);
system("sqlite3 database.db < Components.sql");
echo "Creating \"pages_components\"...\n";
sleep(1);
system("sqlite3 database.db < pages_components.sql");
sleep(1);
//A décommenté lors de l'ajout du script sql Users.sql
//echo "Creating \"Users.sql\"...\n";
//sleep(1);
//system("sqlite3 database.db < Users.sql");
//sleep(1);
echo "Done!\n";
?>