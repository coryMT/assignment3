<?php
	require_once('ParentClass.php');
	require_once('ChildClass.php');
	$koala = new ParentClass("Koala", "eucalyptal forests", "eucalyptus", "images/koala.jpg");
	$anglerfish = new ChildClass("abyssal", "4000 meters", "Angler Fish", "deep sea", "crustaceans", "images/anglerfish.jpg");

	$koala2 = clone($koala);
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
		An animal object (ParentClass) can be any sort of animal. It has properties that apply to all animals, such as it's name, its habitat, and the food that it eats. For example:
	</p>
	<div class="parent">
		<div class="object">
			<p>
				<?= $koala; ?>
			</p>
		</div>
		<div class="image">
			<img src="<?=$koala->getImage();?>" alt="koala" />
		</div>
	</div>

	<p>
		A sea animal object (ChildClass) is a more specific class of animal and has properties that don't apply to all animals, such as the zone of the ocean it lives in and the depth. For example:
	</p>
	<div class="parent">
		<div class="object">
			<p>
				<?= $anglerfish; ?>
			</p>
		</div>
		<div class="image">
			<img src="<?=$anglerfish->getImage();?>" alt="angler fish" />
		</div>
	</div>

	<p>
		Suppose we would like to correct the depth of the angler fish, since it is actually a range from 4000 to 6000 meters. We can do this! For example:
	</p>
	<div class="parent">
		<div class="object">
			<p>
				<?= $anglerfish->setDepth("4000 to 6000 meters"); ?>
				<?= $anglerfish; ?>
			</p>
		</div>
		<div class="image">
			<img src="<?=$anglerfish->getImage();?>" alt="angler fish" />
		</div>
	</div>

	<p>
		Similarly, we can even lie about koala's eating habits by changing the food property! For instance:
	</p>
	<div class="parent">
		<div class="object">
			<p>
				<?= $koala->setFood("OTHER KOALAS"); ?>
				<?= $koala->setImage("images/angrykoala.jpg"); ?>
				<?= $koala; ?>
			</p>
		</div>
		<div class="image">
			<img src="<?=$koala->getImage();?>" alt="angry koala" />
		</div>
	</div>

	<p>
		Good thing we cloned the original koala object to refute these lies:
	</p>
	<div class="parent">
		<div class="object">
			<p>
				<?= $koala2; ?>
			</p>
		</div>
		<div class="image">
			<img src="<?=$koala2->getImage();?>" alt="koala" />
		</div>
	</div>

</body>
</html>
