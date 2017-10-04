<?php
	//Note : Utility of Person now ?
	
	//Generates HTML input + label 
	//__toString() makes it possible to use it as :
	// echo $myInput;
	//
	//echo new Input(
	
	class Property
	{
		public $name;
		public $value;
		
		public function __construct($name, $value)
		{
			$this->name = $name;
			$this->value = $value;
		}
		
		public function __toString()
		{
			return $this->name.'="'.$this->value.'" ';
		}
	}
	
	
	class Input
	{
		public $name;
		public $type;
		public $label;
		public $property;
		
		
		public function __construct($name, $type, $label, $property)
		{
			$this->name = $name;
			$this->type = $type;
			$this->label = $label;
			$this->property =  $property;
		}
		
		public function __toString ()
		{
			$labelField = '<label for="'.$this->name.'">'.$this->label.'</label>';
			$inputField = '<input id ="'.$this->name.'" type="'.$this->type.'" name="'.$this->name.'"';
			
			$inputField .= $this->property;
			
			$inputField .= '>';
			
			return $labelField.$inputField.'<br />';
		}
	}
	
	class Person
	{
		public $name;
		public $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
		
		public function setAge($age)
		{
			$this->age = $age;
		}
	}

	class Booking
	{
		public $price;
		public $destination;
		public $insurance;
		public $numberOfPassengers;
		public $passengers = array();
		
		public function __construct()
		{
			$this->destination = "";
			$this->numberOfPassengers= 0;
			$this->insurance= 0;
		}
		
		public function addPerson($person)
		{
			array_push($this->passengers, $person);
		}
		
		public function removePerson()
		{
			array_pop($this->passengers);
		}
		
		public function reset()
		{
			$this->destination = "";
			$this->numberOfPassengers= 0;
			$this->insurance= 0;
			$this->price = 0;
			$this->passengers = array ();
		}
		
		public function getPrice()
		{
			$price = 0;
			
			if(isset($this->passengers))
			{
				foreach ($this->passengers as $person)
				{
					if($person->age >12)
					{
						$price += 15;
					}
					else
					{
						$price += 10;
					}
				}
			}
				
				if(($this->insurance == "checked")||($this->insurance == 1))
				{
					$price += 20;
				}
			
			return $price;
		}
		
	}

?>