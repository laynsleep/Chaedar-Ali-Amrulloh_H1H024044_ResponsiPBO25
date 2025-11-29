<?php
require_once 'pokemon.php';

$json = json_decode(file_get_contents('./data/stats.json'));

$trainType = $_POST['trainType'];
$intensity = $_POST['intensity'];

$pokemon = new Pokemon($json);
$pokemon->train($trainType, $intensity);

header("Location: trainSuccess.php");
exit;
?>
