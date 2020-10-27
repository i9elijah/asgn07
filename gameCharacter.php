<!DOCTYPE html>
<html>
<head>
	<title>Modify 3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
<?php
	include("inc-game-character-object.php");

	$player1name = $_POST["player1name"];
	$player2name = $_POST["player2name"];
	$player1score = $_POST["player1score"];
	$player2score = $_POST["player2score"];
	$gameCharacter1 = new gameCharacter();
	$gameCharacter2 = new gameCharacter();

	$gameCharacter1->setPlayerName($player1name);
	$gameCharacter2->setPlayerName($player2name);
	$gameCharacter1->setScore($player1score);
	$gameCharacter2->setScore($player2score);

	if ($player1score > $player2score) {
		$winner = $player1name;
		$winningScore = $player1score;
	} else {
		$winner = $player2name;
		$winningScore = $player2score;
	}

	print ("<p>Player 1 as ".$gameCharacter1->getPlayerName()." Versus Player 2 as ". $gameCharacter2->getPlayerName()."</p>");
	print ("<p>Player 1 has a score of ".$gameCharacter1->getScore()." Versus Player 2's score of ".$gameCharacter2->getScore()."</p>");
	print ("<p>The winner is: ".$winner." with a score of: ".$winningScore."</p>");
?>
</body>
</html>