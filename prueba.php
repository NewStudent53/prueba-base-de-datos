<?php
$user = 'root';
$passwd = 'QPwFJVQzGGV41G8HmtminTYs1wv1seKm';
$db = 'file_manager_database';
$port = 5432;
$host = 'dpg-cr9jm4d6l47c73copb6g-a.oregon-postgres.render.com';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
echo "Conexion exitosa <hr>";
?>
