<?php 
class Question {
	private $name ;
	private $choice ;

	public function __construct($name){
		$this->name = $name;
	}


public function hello()
{
	echo '私は'.$this -> name.'です';
}

public function getName()
{
	return $this -> name;
}

public function check()
{
	 if(empty($_POST[$que -> getName()])){
    	echo "未入力です。";
    	}
}

// public function getChoice()
// {
// 	return $this -> choice;
// }


}
 ?>
