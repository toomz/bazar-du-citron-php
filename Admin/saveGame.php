<?php
include "../database_connection.php";

if(isset($_POST['submit'])){
	$game = test_input($_POST["gameNameInput"]);
	$shortDesc = test_input($_POST['shortDescInput']);
	$longDesc = test_input($_POST['longDescInput']);

	if(isset($_POST['editorInput']) && !isset($_POST['editorSelect'])){
		$editorI = test_input($_POST['editorInput']);
	}
	else if(isset($_POST['editorSelect']) && !isset($_POST['editorInput'])){
		$editorS = $_POST['editorSelect'];
	}

	if(isset($_POST['authorInput']) && !isset($_POST['authorSelect'])){
		$authorI = test_input($_POST['authorInput']);
	}
	else if(isset($_POST['authorSelect']) && !isset($_POST['authorInput'])){
		$authorS = $_POST['authorSelect'];
	}

	


}

?>