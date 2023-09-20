<?php
echo 'Creating database...';
sleep(1);
echo 'Creating "Pages"...';
sleep(1);
system('sqlite3 database-new.db < Pages.sql');
echo 'Creating "Components"...';
sleep(1);
system('sqlite3 database-new.db < Components.sql');
echo 'Creating "pages_components"...';
sleep(1);
system('sqlite3 database-new.db < pages_components.sql');
sleep(1);
echo 'Done!';
?>