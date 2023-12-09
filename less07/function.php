<?php 
function clear(){
    global $db;
    foreach ($_POST as $key => $value) {
		$_POST[$key] = mysqli_real_escape_string($db, $value);
	}
}
function save_mess(){
    global $db;
    clear();
    extract($_POST);
    //$text = mysqli_real_escape_string($db, $_POST['text1']);
    $query = "INSERT INTO mess (text) VALUES('$text')";
    mysqli_query($db, $query);
    
   
}
function get_mess(){
    global $db;
    $query = "SELECT * FROM mess ORDER BY date DESC";
    $res = mysqli_query($db, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);

}
function tel_mess(){
    $text = $_POST['text'];
    $apiToken = "++";
    $data = [
      'chat_id' => '++',
      'text' => $text
    ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
}
function show_arr($arr){
    echo '<pre>'.print_r($arr, true).'</pre>';
}

?>