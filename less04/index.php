<?php
error_reporting(-1);
    echo "<pri>";
    print_r($_POST);
    echo "</pri>";
    $nambar = (int)$_POST['nambar'];
    echo "<br>";
   /* if($nambar == 1){
        echo "Asan";
    }elseif($nambar == 2){
        echo "Daniel";
    }elseif($nambar == 3){
        echo "Nurbek";
    }else{
       echo "error";
    }
    for($i = 1; $i<=$nambar; $i++){
        echo $i."<br>";
    }*/



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
    <input type="text" name="nambar" id="">
    <input type="submit" value="Ok">
   </form>

   <table border="1">
    <?php 
    for($i=1; $i<=$nambar; $i++){
      echo  '<tr>';
        for($u=1; $u<=8; $u++){
            echo "<td>1</td>";
        }
         
        echo '</tr>';
    }
    
    ?>
    
   </table>
</body>
</html>