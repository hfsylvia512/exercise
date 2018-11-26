<?php 
// 单例模式：实例
// 当需要保证对象只有一个实例的时候，单例模式是非常有用的。他把创建对象的控制权交给一个单一的点上，任何时候应用程序都只会存在且仅存在一个实例。单例类不应该能在类的外部进行实例化。
// 一个单例类应该具备以下几个因素：

    // 必须拥有一个访问级别为private的构造函数，用于阻止类被随意实例化
    // 必须拥有一个保存类的实例的静态变量
    // 必须拥有一个访问这个实例的公共静态方法，该方法通常被命名为getInstance()
    // 必须拥有一个私有的空的clone方法，防止实例被克隆复制
	
	class Single{
		public static $_instance;
		// 构造函数
		private function __construct(){

		}

		// 克隆
		private function __clone(){

		}

		public static function getInstance(){
			if(!self::$_instance){
				self::$_instance = new self();
			}
			return self::$_instance;
		}

		public function sayHi(){
			echo 'Hi ';
		}

	}
	$single = Single::getInstance();
	$single->sayHi();
 ?>	