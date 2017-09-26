<?php

	class Person
	{
		
		public function __construct($firstName, $lastName, $age)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->age = $age;
		}
		
		public $firstName;
		public $lastName;
		public $age;
	}

	class Booking
	{
		public $price;
		public $destination;
		public $warranty;
		public $people = array();
		
		//This function may need a constructor to specify parameters
		//Currently useless
		/*public function __construct($price, $destination, $warranty, $people)
		{
			$this->price= $price;
			$this->destination = $destination;
			$this->warranty= $warranty;
			$this->people= $people;
		}*/
		
		public function addPerson($person)
		{
			array_push($this->people, $person);
		}
	}

?>