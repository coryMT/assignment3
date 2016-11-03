<?php
	// This is the file for the parent class

	//ParentClass represents an Animal
	class ParentClass {
		private $type;
		private $habitat;
		private $food; //food animal eats

		public function getType() {
			return $this->type;
		}

		public function getHabitat() {
			return $this->habitat;
		}

		public function getFood() {
			return $this->food;
		}

		public function setType($newType) {
			$this->type = $newType;
		}

		public function setHabitat($newHabitat) {
			$this->habitat = $newHabitat;
		}

		public function setFood($newFood) {
			$this->food = $newFood;
		}

		public function __construct($type, $habitat, $food) {
			$this->type = $type;
			$this->habitat = $habitat;
			$this->food = $food;
		}

		public function __toString() {
			return "Animal Type: " . $this->getType() . "<br>" . "Habitat: " . $this->getHabitat() . "<br>" . "Food: " . $this->getFood();
		}
	}
