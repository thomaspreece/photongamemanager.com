<?php

if (isset($_GET["Folder"])){
	$Folder=filter_var($_GET["Folder"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW );
}else{
	die('');
}

try {

$db = new PDO('mysql:host=localhost;dbname=XXX;charset=UTF8', 'XXX', 'XXX', array(PDO::ATTR_EMULATE_PREPARES => false, 
                                                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$stmt = $db->prepare("SELECT * FROM pcgames WHERE Folder=:folder");
$stmt->bindValue(':folder', $Folder, PDO::PARAM_STR);
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo
$row['ID']."
".$row['EXE']."
".$row['Name']."
";
}

$db = null;

} catch(PDOException $ex) {
	die('');
}
?>
