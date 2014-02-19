<?php
$bdd = new mysqli("localhost", "root", "10e15p3&", "bazar-du-citron");

function getEditors($bdd){
	return $bdd->query('SELECT * FROM Editors');
}

function getAuthors($bdd){
	return $bdd->query('SELECT * FROM Authors');
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>