<?php
//Gets Steam Game Data
header("Content-type: application/json; charset=utf-8");
$Search = $_GET['q'];
$Search = str_replace(" ","+",$Search);
include("./Keys.php");

if($Search!=""){
echo "https://www.googleapis.com/youtube/v3/search?part=id&q=".$Search."&maxResults=1&key=".$YOUTUBE_KEY."&type=video";
echo getSslPage("https://www.googleapis.com/youtube/v3/search?part=id&q=".$Search."&maxResults=1&key=".$YOUTUBE_KEY."&type=video");
}

function getSslPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
?>
