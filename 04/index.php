<!DOCTYPE html>
<html> 
<head> 
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body> 
<h3>Шахматная доска с использованием цикла For</h3>
<table width="225px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 225px wide (8 columns x 50px) -->
<?php
$word = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
for($row=0;$row<=9;$row++)
{
  echo "<tr>";
  if ($row==0 or $row == 9){
    for($col=0;$col<=9;$col++){
      if ($col>0 and $col<9){
        echo "<td>";
        echo $word[$col-1];
        echo "</td>";
      }
      else{
        echo "<td></td>";
      }
    }
  }
 else {
  for($col=0;$col<=9;$col++)
  {
  $total=$row+$col;
  if ($col == 0) 
  {
      echo "<td height=25px width=25px bgcolor='red'>" . $row .  "</td>";
  }elseif($col<=8){
    if($total%2==0)
          {
            echo "<td height=25px width=25px bgcolor=#FFFFFF></td>";
          }
        else
          {
            echo "<td height=25px width=25px bgcolor=#000000></td>";
          }
    }
  
  else{
    if ($col == 9) 
    {
        echo "<td height=25px width=25px bgcolor='red'>" . $row .  "</td>";
    }
  }
}}
  echo "</tr>";
}
?>
</table>
</body>
</html>