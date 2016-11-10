<?php
$ID= $_GET['ID'];
$servername = "localhost"; //SERVER HOST (default value : localhost)
$username = "root"; //SQLSERVER USERNAME
$password = "password"; //SQLSERVER PASSWORD
$dbname = "dbname"; //DATABASE NAME
$connect = mysql_connect($servername, $username, $password) or die("fail");
mysql_select_db($dbname,$connect);

         $sql = "select * fromtablename where ID = '".mysql_real_escape_string($ID)."'"; //insert tablename    

$result=mysql_query($sql);

while($array=mysql_fetch_array($result)){
  echo "$array[ID],$array[name],"; //echo ID,name must be edit this 
}
mysql_close($connect);

?>

