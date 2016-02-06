<h1>Hello World!!!</h1>
<h3><?= phpinfo() ?></h3>

<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbuser = 'elasticuser';
$dbpass = 'pass';
$dbhost = 'host';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");
