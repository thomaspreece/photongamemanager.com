<?php

if (isset($_GET["EXE"])){
	$EXE=filter_var($_GET["EXE"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW );
}else{
	die('Error at EXE');
}

try {

$db = new PDO('mysql:host=localhost;dbname=XXX;charset=UTF-8', 'XXX', 'XXX', array(PDO::ATTR_EMULATE_PREPARES => false, 
                                                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$stmt = $db->prepare("SELECT * FROM pcgames WHERE EXE=:exe");
$stmt->bindValue(':exe', $EXE, PDO::PARAM_STR);
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo
$row['ID']."
".$row['Name']."
";
}

$db = null;

} catch(PDOException $ex) {
	die('Error');
}
?>
