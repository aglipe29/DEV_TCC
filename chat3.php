<?php

$db = new mysqli("localhost","root","","nixies2");
if($db->connect_error){
	die("Connection failed: " . $db->connect_error);
}

$result = array();
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : null;
$from = isset($_POST['from']) ? $_POST['from'] : null;

if(!empty($mensagem) && !empty($from)){
	$sql = "INSERT INTO `chat3` (`mensagem`, `from`) VALUES ('".$mensagem."','".$from."')";
	$result['send_status'] = $db->query($sql);
}

$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $db-> query("SELECT * FROM `chat3` WHERE `id` > " . $start);
while($row = $items->fetch_assoc()){
	$result['items'][] = $row;
}

$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);