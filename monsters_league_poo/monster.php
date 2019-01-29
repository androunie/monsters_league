<?php 


class Monster {

	public $name; 

	public $lastName;

	public $age = 7; 

	private $color; 

	function __construct($name, $lastName, $age, $color) {
		$this-> name= $name;
		$this-> lastName= $lastName;
		$this-> age= $age;
		$this-> color= $color;
	}

	function setName($name) {
		$this->name= $name;
	}

	function getName() {
		return $this->name;
	}

	function setLastName($lastName) {
		$this->lastName= $lastName;
	}

	function getLastName() {
		return $this->lastName;
	}

	function setAge($age) {
		$this->age= $age;
	}

	function getAge() {
		return $this->age;
	}
		
	function setColor($color) {
		$this->color= $name;
	}

	function getColor() {
		return $this->color;
	}
}
