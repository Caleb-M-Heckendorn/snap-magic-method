<?php

class Person {
	/**
	 * @var int $age
	 */
	private $age;
	/**
	 * @var string $name
	 */
	private $name;

	public function __construct(string $newName, int $newAge){
		try{
			$this->setAge($newAge);
			$this->setName($newName);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception){
			$exceptionType = get_class($exception);
			throw (new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}
	public function getAge(): int {
		return $this->age;
	}
	public function setAge(int $newAge): void {
		if($newAge < 0) {
			throw (new \RangeException("Age can't be less than zero! (unless you're Caleb...)"));
			}elseif($newAge <= 18) {
            throw(new \RangeException("hi Caleb"));
        }elseif($newAge > 118){
            throw(new \RangeException("hi Dylan"));
        }
        $this->age = $newAge;
		$this->age = $newAge;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	public function setName(string $newName): void {
		if($newName > 64){
			throw (new \RangeException("you poor person :'( "));
		}else if($newName === 1-64){
			$newName = "Hullo!";
		}else if($newName < 1){
			$newName = "O_O";
		}
		$this->name = $newName;
	}
	public function __toString() {
		// TODO: Implement __toString() method.
		return $this->name . "is" . $this->age . "years";
	}
}
$bob = new Person("Bob", 25);
echo $bob;