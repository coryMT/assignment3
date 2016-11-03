<?php
	require_once('ParentClass.php');
	require_once('ChildClass.php');
	$koala = new ParentClass("Koala", "eucalyptal forests", "eucalyptus");
	$anglerfish = new ChildClass("abyssal", "4000 meters", "Angler Fish", "deep sea", "crustaceans");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>

	<h1>Example of object oriented PHP using an Animal super class with a Sea Animal subclass!</h1>

	<p>
		An animal can be any sort of animal. It has properties that apply to all animals, such as it's name, its habitat, and the food that it eats. For example:
	</p>
	<?= $koala; ?>

	<p>
		A sea animal is a more specific class of animal and has properties that don't apply to all animals, such as the zone of the ocean it lives in and the depth. For example:
	</p>
	<?= $anglerfish; ?>

	<p>
		Suppose we would like to correct the depth of the angler fish, since it is actually a range from 4000 to 6000 meters. We can do this! For example:
	</p>
	<?= $anglerFish->setDepth("4000 to 6000 meters"); ?>
	<?= $anglerFish; ?>

	<p>
		Similarly, we can even lie about koala's eating habits by changing the food property! For instance:
	</p>
	<?= $koala->setFood("OTHER KOALAS!"); ?>
	<?= $koala; ?>
</body>
</html>
