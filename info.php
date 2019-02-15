<?php 

	if(isset($_POST['send'])){

		$name = $_POST['name'];
		$familyname = $_POST['familyname'];
		$male = $_POST['male'];
		$age = $_POST['age'];
		$young = $_POST['young'];
		$date = $_POST['date'];
		$mar = $_POST['mar'];
		$status = $_POST['status'];
		$residence = $_POST['residence'];
		$hobby = $_POST['hobby'];
		$books = $_POST['books'];
		$comment = $_POST['comment'];
		$mail = $_POST['mail'];
		$subscribe = $_POST['subscribe'];
		$level = $_POST['level'];

		echo "Имя: ".$name."<br>";
		echo "Фамилия: ".$familyname."<br>";

		If(isset($_POST['male'])){

			foreach($male as $key => $value){
				echo "Пол: $value<br>";
			}
		}

		echo "Возраст: ".$age."<br>";

		If(isset($_POST['young'])){

			foreach($young as $key => $value){
				echo "$value<br>";
			}
		}

		echo "Дата рождения: ".$date."<br>";
		echo "Семейное положение: ".$mar."<br>";
		echo "Социальный статус: ".$status."<br>";
		echo "Местожительство: ".$residence."<br>";

		If(isset($_POST['hobby'])){
			echo "На выходных я обычно:<br>";
			foreach($hobby as $key => $value){
				echo "$value<br>";
			}
		}

		If(isset($_POST['books'])){
			echo "Я прочитал ";
			foreach($books as $key => $value){
				echo "$value"." книг<br>";
			}
		}

		echo $comment."<br>";
		echo "Ваш e-mail: ".$mail."<br>";

		If(isset($_POST['subscribe'])){
			echo "Вы подписались на:<br> ";
			foreach($subscribe as $key => $value){
				echo "$value<br>";
			}
		}

		If(isset($_POST['level'])){
			echo "Ваша оценка задачи: ";
			foreach($level as $key => $value){
				echo "$value<br>";
			}
		}

	}

?>