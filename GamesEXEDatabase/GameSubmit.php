<?php

if (isset($_GET["ID"])){
	$ID=filter_var($_GET["ID"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW );
}else{
	die('Error No ID');
}
if (isset($_GET["Folder"])){
	$Folder=filter_var($_GET["Folder"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW );
}else{
	die('Error No Folder');
}
if ($Folder==" " or $Folder==""){
	die('Error No Folder');
}
if (isset($_GET["EXE"])){
	$EXE=filter_var($_GET["EXE"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW );
}else{
	echo $_GET["EXE"]." ";
	die('Error No EXE');
}
if (isset($_GET["Name"])){
	$Name=filter_var($_GET["Name"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_LOW );
}else{
	echo $_GET["Name"]." ";
	die('Error No Name');
}

try {

$db = new PDO('mysql:host=localhost;dbname=XXX;charset=UTF-8', 'XXX', 'XXX', array(PDO::ATTR_EMULATE_PREPARES => false,
                                                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$stmt = $db->prepare("SELECT * FROM pcgames WHERE Folder=:folder");
$stmt->bindValue(':folder', $Folder, PDO::PARAM_STR);
$stmt->execute();

$ResultsReturned=false;

while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	echo "ID: ".$row['ID']." <br/> EXE: ".$row['EXE'];
	$ResultsReturned=true;
}
if($ResultsReturned==false)
{
	$stmt = $db->prepare("INSERT INTO pcgames (ID, Folder, EXE, Name)
	VALUES (:id, :folder, :exe, :name)");
	$stmt->bindValue(':id', $ID, PDO::PARAM_STR);
	$stmt->bindValue(':folder', $Folder, PDO::PARAM_STR);
	$stmt->bindValue(':exe', $EXE, PDO::PARAM_STR);
	$stmt->bindValue(':name', $Name, PDO::PARAM_STR);
	$stmt->execute();

	if ($stmt->rowCount() == 1){
		echo "Set";
	}
}
else
{
	$stmt = $db->prepare("DELETE FROM pcgames WHERE Folder=:folder");
	$stmt->bindValue(':folder', $Folder, PDO::PARAM_STR);
	$stmt->execute();

	$stmt = $db->prepare("INSERT INTO pcgames (ID, Folder, EXE, Name)
	VALUES (:id, :folder, :exe, :name)");
	$stmt->bindValue(':id', $ID, PDO::PARAM_STR);
	$stmt->bindValue(':folder', $Folder, PDO::PARAM_STR);
	$stmt->bindValue(':exe', $EXE, PDO::PARAM_STR);
	$stmt->bindValue(':name', $Name, PDO::PARAM_STR);
	$stmt->execute();

	if ($stmt->rowCount() == 1){
		echo "
		Set";
	}
}


$db = null;

} catch(PDOException $ex) {
	die('Error');
}

?>
