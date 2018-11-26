<?php 
// 工厂模式
// 工厂模式解决的是如何不通过new建立实例对象的方法
// 工厂模式是一种类，它具有为你创建对象的某些方法，你可以使用工厂类创建对象而不使用new。这样，如果你想要更改所创建的对象类型只需要更改工厂即可，使用该工厂的所有代码会自动更改。
// 工厂模式往往配合接口一起使用，这样应用程序就不必要知道这些被实例化的类的具体细节，只要知道工厂返回的是支持某个接口的类就可以方便的使用了。

// 抽象出一个人的接口
// Interface Person
interface Person{
	public function showInfo();
}

// 一个继承于抽象人接口的学生类
// Class Student

class Student implements Person{
	public function showInfo(){
		echo '这是一个学生';
	}
}


// 一个继承于抽象人接口的老师类
// class teacher

class Teacher implements Person{
	public function showInfo(){
		echo '这是一个老师';
	}
}

// 人类工厂
// class personfactory   
// class_exists — 检查类是否已定义
class PersonFactory{
	public static function factory($person_type){
		// 将传入的类型首字母大写
			$class_name = ucfirst($person_type);
			if(class_exists($class_name)){
				return new $class_name;
			}else{
				throw new Exception('类：$class_name 不存在',1);
			}
	}
}

// 需要一个学生
$student = PersonFactory::factory('student');
echo $student->showInfo();

//需要一个老师
$teacher = PersonFactory::factory('teacher');
echo $teacher->showInfo();

 ?>