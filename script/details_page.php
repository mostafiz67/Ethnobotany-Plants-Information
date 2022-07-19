<?php
/*include 'connect.php';
$id=$_GET['id'];
$sql=mysql_query("SELECT *FROM descriptionoftree  WHERE id = '$id'");
while ($row=mysql_fetch_array($sql)){
echo $row['description'];
}*/
?>

<html>
<head> 
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BEOD</title>
	</head>
<body>
<?php
include 'connect.php';
//include 'frontend_leftmenu.php';
$id=$_GET['id'];
$sql=mysql_query("SELECT *FROM descriptionoftree  WHERE id = '$id'");

while ($row=mysql_fetch_array($sql)){

echo '<center><div style="margin-top: 100px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold;">'.$row['scientificname'].'</div></center>';

echo '<div style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;">Synonyms : </div>';
//echo '<div style = "margin-left: 150px;">'.str_replace(',','<br />',$row["synonyms"]).'</div>'; 

$mySino = explode(( ','),  $row["synonyms"]);

echo '<div style = "margin-left: 150px;">' ;
foreach ($mySino as $key => $myRow) {  

  $myValue= explode( ' ', $myRow,  3);

    echo  '<span style="font-style: italic;">' . 
           (isset($myValue[0]) ? $myValue[0] : '') .
       ' ' . (isset($myValue[1]) ? $myValue[1] : '' ) .
      '</span> ' .( isset($myValue[2]) ? $myValue[2] : '') . '<br />';
}

echo     '</div>'  ;
	   
echo '<div><span style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;"> Duration : </span>'.$row['duration'].'</div>';
 
echo '<div><span style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;"> Family : </span>'.$row['family'].'</div>';

echo '<div><span style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;"> Group : </span>'.$row['groupname'].'</div>';

echo '<div><span style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;"> Growth Habit : </span> '.$row['growthhabit'].'</div>';

echo '<div><span style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;">Bengali Name : </span> '.$row['banglaname'].'</div>';

echo '<div><span style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;">Tribal Name : </span> '.$row['tribalname'].'</div>';

echo '<div><span style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;">English Name : </span> '.$row['english_name'].'</div>';

echo '<div style="margin-top: 10px; margin-bottom: 10px; margin-left: 150px; font-size: 20px; color: #000; font-weight: bold;">Description of plant : </div>';
echo '<div style = "margin-left: 150px; margin-right: 150px;">'.str_replace(';','<br />',$row["description"]).'</div>';

$photo=$row['image'];
echo "<center><img src='image/$photo' height='500' width='332' alt='no image'/></center>";
echo '<center><div style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000;">'.$row['scientificname'].'</div></center>';

echo '<div style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;">Mode of use : </div>';
echo '<div style = "margin-left: 150px; margin-right: 150px;">'.str_replace(';','<br />',$row["modeofuse"]).'</div>';

echo '<div style="margin-top: 10px; margin-bottom: 10px; font-size: 20px; color: #000; font-weight: bold; margin-left: 150px;">Distribution : </div>';
echo '<div style = "margin-left: 150px; margin-right: 150px;">'.str_replace(';','<br />',$row["distribution"]).'</div>';
}
?>
	
<div class="wrapper">
    <button class="button">Hello</button>
</div>

</body>
</html>