<?php 
echo "<pre>";
print_r($_FILES);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input name="userfile" type="file" /><br />
    <input type="submit" value="Отправить" />
       
    </form>
</body>
</html>