<?php 
	class Student {
		//thuộc tính ko dc nạp giá trị thì mặc định là null
		protected $id; //protected chỉ gọi dc bên trong class, ko gọi dc bên ngoài
		public $name; //tầm vực public gọi ở đâu cũng dc
		public $birthday;
		public $gender;

		function __construct($id, $name, $birthday, $gender) {
			//nạp giá trị cho thuộc tính
			$this->id = $id; //$this->id: truy xuất vào thuộc tính id của class
			$this->name = $name;
			$this->birthday = $birthday;
			$this->gender = $gender;
		}
		function getAge() {
			$currentYear = date("Y");
			$bornYear = date("Y", strtotime($this->birthday));
			$age = $currentYear - $bornYear;
			return $age;
		}
		// mặc định tầm vực truy xuất của thuộc tính và hàm là public, nếu cần bảo vệ riêng tư thì ta thêm tầm vực vào đằng trước
		function getId() {
			return $this->id;
		}
	}
	//bên ngoài class ko dùng $this, bên trong class mới dùng
	//dùng mũi tên -> : là gọi/truy xuất
	//gọi hàm __construct của class Student
	$sv1 = new Student(1257, "Nguyễn Thị Bảy", "1999-09-21", "nữ");
	var_dump($sv1);
	echo $sv1->getAge();
	$sv2 = new Student(1257, "Nguyễn Tú", "2000-09-21", "nam");
	//$sv2->id = 1259; //ko thể thay đổi id vì thuộc tính id của class có tầm vực là protected. Nếu là public thì gọi ở đâu cũng được
	echo $sv2->getId();
	var_dump($sv2);
 ?>