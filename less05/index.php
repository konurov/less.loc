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

?>