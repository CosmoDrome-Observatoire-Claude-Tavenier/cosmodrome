<?php
echo "Deleting old database...\n";
system("rm -f database.db");
echo "Creating database...\n";
echo "Creating \"Pages\"...\n";
system("sqlite3 database.db < Pages.sql");
echo "Creating \"Components\"...\n";
system("sqlite3 database.db < Components.sql");
echo "Creating \"pages_components\"...\n";
system("sqlite3 database.db < pages_components.sql");
echo "Creating \"Users.sql\"...\n";
system("sqlite3 database.db < Users.sql");
echo "Done!\n";
?>