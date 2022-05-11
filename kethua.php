<?php 
class A {
	// private cũng giống protected nhưng khác 1 điểm là private ko cho truy xuất ở các lớp kế thừa
	private $money;
	protected $eyes;
	function __construct($money, $eyes) {
		$this->money = $money;
		$this->eyes = $eyes;
	}

	function getEyes() {
		return "khakha";
	}
}

$x = new A(200, "màu xanh");
var_dump($x);

// echo $x->eyes;//không truy xuất được
// echo $x->money;//không truy xuất được
//thuộc tính có tầm vực là private thì bên ngoài class cũng ko truy xuất dc

//extends: kế thừa
// B kế thừa A
class B extends A {

	function f1() {
		return $this->money;// không truy xuất được vì tầm vực của nó là private
	}

	function f2() {
		return $this->eyes;
	}
}

$y = new B(300, "màu đỏ");
var_dump($y);

echo $y->getEyes();
echo "<br>";

//trong lớp kế thừa ko dc truy xuất thuộc tính private 
// echo $y->f1();
echo "<br>";
echo $y->f2();
?>