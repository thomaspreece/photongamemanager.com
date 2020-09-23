<?php
include("./Keys.php");

//Gets Steam Game Data
header("Content-type: text/xml; charset=utf-8");
$UserID = $_GET['ID'];
$UserID = preg_replace('/[^0-9]/','',$UserID);

if($UserID!=""){
echo file_get_contents("http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=".$STEAM_KEY."&steamid=".$UserID."&include_appinfo=1&format=xml&include_played_free_games=1");
}
?>
