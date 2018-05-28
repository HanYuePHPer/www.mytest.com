<?php
	class TestClass{
		public function test($id){
			if(is_numeric($id)){
				return $this->id=$id;
			}else{
				return $this->name=$id;
			}
		}
	}
	$hello=new TestClass();
	echo $hello->test('123');
	echo $hello->id;
	echo '<br/>';
	$name=isset($_GET['name'])?$_GET['name']:'World';
	echo 'hello '.$name;
?>