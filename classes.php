<?php
	
	//Generates HTML input + label 
	//__toString() makes it possible to use it as :
	// echo $myInput;
	//
	//echo new Input(
	
/*	class Property
	{
		private $name;
		private $value;
		
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
	
*/	
	class Input
	{
		private $name;
		private $type;
		private $label;
		//private $previousV;
		
		
		public function __construct($name, $type, $label)
		{
			$this->name = $name;
			$this->type = $type;
			$this->label = $label;
		}
		
		public function __toString ()
		{
			$labelField = '<label for="'.$this->name.'">'.$this->label.'</label>';
			$inputField = '<input id ="'.$this->name.'" type="'.$this->type.'" name="'.$this->name.'"';
			//$inputField .= ' value="<?php echo ' .$this->name.';>"';
			
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
		
		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
		
		public function getAge()
		{
			return $this->age;
		}		
		
		public function setAge($age)
		{
			$this->age = $age;
		}
	}

	class Reservation
	{
		private $destination;
		private $insurance;
		private $numberOfPassengers;
		private $passengers = array();
		
		public function __construct()
		{
			$this->destination = "";
			$this->numberOfPassengers= 0;
			$this->insurance= False;
		}
		
		public function GetDestination()
		{
			return $this->destination;
		}
		
		public function SetDestination($destination)
		{
			$this->destination = $destination;
		}
		
		public function GetInsurance()
		{
			if($this->insurance)
			{
				return True;
			}
			else
			{
				return False;
			}
		}
		
		public function SetInsurance()
		{
			$this->insurance = True;
		}
		public function UnsetInsurance()
		{
			$this->insurance = False;
		}
		
		public function GetNumberOfPassengers()
		{
			return $this->numberOfPassengers;
		}
		
		public function GetPassenger($index)
		{
			if(isset($this->passengers[$index]))
			{
				return $this->passengers[$index];
			}
			else
			{
				return null;
			}
		}
		
		public function GetPrice()
		{
			$price = 0;
			
			if(isset($this->passengers))
			{
				foreach ($this->passengers as $person)
				{
					if($person->getAge() >12)
					{
						$price += 15;
					}
					else
					{
						$price += 10;
					}
				}
			}
				
				if(($this->insurance == True))
				{
					$price += 20;
				}
			
			return $price;
		}
		
		public function AddPerson($person)
		{
			array_push($this->passengers, $person);
			$this->numberOfPassengers++;
		}
		
		public function RemovePerson()
		{
			if(array_pop($this->passengers)!=null)
			{
				$this->numberOfPassengers--;
			}
		}
		
		public function Reset()
		{
			$this->destination = "";
			$this->numberOfPassengers= 0;
			$this->insurance=False;
			$this->passengers = array ();
		}
	}

?>
