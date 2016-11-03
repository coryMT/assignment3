<?php
	// this file will extend PArentClass.php

	//This class extends the parent class (animal) and represents a sea animal
	class ChildClass extends ParentClass {
		private $zone; //zone of the ocean that the animal lives in
		private $depth;

		public function getZone() {
			return $this->zone;
		}

		public function getDepth() {
			return $this->depth;
		}

		public function setZone($newZone) {
			$this->zone = $newZone;
		}

		public function setDepth($newdepth) {
			$this->depth = $newdepth;
		}

		public function __construct($zone, $depth, $type, $habitat, $food) {
			$this->zone = $zone;
			$this->depth = $depth;

			parent::__construct($type, $habitat, $food);
		}

		public function __toString() {
			return "Zone: " . $this->getZone() . "<br>" . "Number of Fins: " . $this->getDepth();
		}
	}
