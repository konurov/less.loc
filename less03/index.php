<?php
error_reporting(-1);
$i = 5;
$result = 2 ** 1; 
$resilt = $_POST;
echo $result;
if(!empty($_FILES)){
    echo "<pre>";
        print_r($_FILES);
    echo "</pre>";
    move_uploaded_file($_FILES['photo']['tmp_name'],"uploads/".$_FILES['photo']['name']);

$arr = array("Asan","Usyn","Sanjar","Mirbek");
    echo "<pre>";
        var_dump($arr);
    echo "</pre>";
    echo "<pre>";
        print_r($arr);
    echo "</pre>";
   
    echo $arr['2'];

    $arr4 = ["Asan","Usyn","Sanjar",[200,201,203,204],"Mirbek"];

    echo "<pre>";
    print_r($arr4);
echo "</pre>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="file" name="photo" id="">
        <input type="submit" value="Ок">

        
    </form>

    <h2><?php echo $arr4[2];  echo "----"; echo $arr4[3][2];?></h2>
</body>
</html>