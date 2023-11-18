<?php
    error_reporting(-1);
    $db = @mysqli_connect("localhost","root","","db") or die('Ошибка соединения с БД');;
    #var_dump($db);
    if(!$db) die(mysqli_connect_error());
    
    $insert = "INSERT INTO `mydb` (name,text) values ('Нурбек','Привет')";
    $rester = mysqli_query($db, $insert);
    if($rester) echo "Успешно добавлены в БД";
    else echo "error";
    echo mysqli_error($db);

/*$insert = "INSERT INTO gb (name, text) VALUES ('Нурлан', 'Lorem ipsum dolor sit amet, consectetur adipisicing.')";
$res_insert = mysqli_query($db, $insert);
if($res_insert) echo 'OK';
else echo 'Error';
echo mysqli_error($db);*/

/*$update = "UPDATE gb SET text = CONCAT(text, '|||') WHERE id > 4";
$res_update = mysqli_query($db, $update) or die(mysqli_error($db));*/

/*$delete = "DELETE FROM gb WHERE id > 4";
$res_delete = mysqli_query($db, $delete);
echo mysqli_affected_rows($db);*/

$res = mysqli_query($db, "SELECT * FROM gb");
var_dump($res);

?>