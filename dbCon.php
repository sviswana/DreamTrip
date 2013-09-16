<?
$host="sql.mit.edu";
$username="srinidhi";
$password="dreamtrip";
$dbname="srinidhi+DreamTrip";

$con=mysql_pconnect($host,$username,$password);

if (!$con)
{
    echo "Error connection to database.\n";
}

mysql_select_db($dbname,$con) or dir("error");
?>