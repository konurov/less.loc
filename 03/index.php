<?php 
error_reporting(-1);
if(!empty($_FILES)){
 
    /*print_r($_FILES);
    echo "</pre>";
    move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);*/
      $uploaddir = 'uploads/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

       
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
           
            $text = "Файл корректен и был успешно загружен.";
        } else {
            $uploadfile = "uploads/error.jpg";
            $text = "Возможная атака с помощью файловой загрузки!";
        }

}

?>
<style>
    input[type="file"]::file-selector-button {
  border-radius: 4px;
  padding: 0 16px;
  height: 40px;
  cursor: pointer;
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.16);
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
  margin-right: 16px;
  transition: background-color 200ms;
}
div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}

/* file upload button hover state */
input[type="file"]::file-selector-button:hover {
  background-color: #f3f4f6;
}

/* file upload button active state */
input[type="file"]::file-selector-button:active {
  background-color: #e5e7eb;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  
}
body {margin-left:30%;}


</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="post">
     <input type="file" name="userfile" id="">
     <input type="submit" value="Отправить файл">
    </form>
    <?php if(!empty($_FILES)): ?>
    <div class="polaroid">
    <img src="./<?=$uploadfile;?>" alt="5 Terre" style="width:100%">
        <div class="container">
            <p><?=$text;?></p>
        </div>
    </div>
    <?php endif;?>
</body>
</html>