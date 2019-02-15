<?php
	include_once 'includes/dbc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomeWork#3</title>
	<!-- <link rel="stylesheet" type="text/css" href="styles/styles.css"> -->
</head>
<body>
	<form action="includes/result.php" method="post">
		<fieldset class="field_1">
			<legend>Коротко о себе</legend>
			<label>Имя:<input class="name" type="text" name="name"></label>
			<label>Фамилия:<input class="name" type="text" name="familyname"></label>
		   <div>
			<label>Пол:<input type="radio" name="sex[]" value="мужской">мужской</label>
			<label><input type="radio" name="sex[]" value="женский">женский</label>
		   </div>
			<label>Возраст:<input class="age" type="number" name="age">лет</label>
		</fieldset>
		<fieldset>
			<legend>Подробнее</legend>
		    <label><input type="radio" name="male[]" value="Молодой человек">Молодой человек</label><br>
		    <label><input type="radio" name="male[]" value="Девушка">Девушка</label><br>
          <div>
		    <label><input type="text" name="date">Дата рождения</label><br>
		    <label><input type="text" name="mar">Семейное положение</label><br>
		    <label><input type="text" name="status">Социальный статус</label><br>
		    <label><input type="text" name="residence">Местожительство</label>
	      </div><br>
		<p>Что вы  обычно делаете на выходных:</p>
		  <div class="zero">
		  	<label><input type="checkbox" name="hobby[]" value="Сплю">Sleep</label><br>
		    <label><input type="checkbox" name="hobby[]" value="Гуляю с друзьями">Гуляю с друзьями</label><br>
		    <label><input type="checkbox" name="hobby[]" value="Хожу на рыбалку">Хожу на рыбалку</label><br>
		    <label><input type="checkbox" name="hobby[]" value="Играю в игры">Играю в игры</label>
		  </div><br>
		<p>Рассказать о формах в книге, посвященной HTML:</p><br>
		   <select>
			 <option>Item 1</option>
			 <option>Item 2</option>
			 <option>Item 3</option>
		   </select><br>
		<p>Сколько книг вы прочитали за свою жизнь:</p>
		  <div class="zero"><label><input type="radio" name="books[]" value="0-10">0-10</label><br>
		    <label><input type="radio" name="books[]" value="11-20">11-20</label><br>
		    <label><input type="radio" name="books[]" value="21-50">21-50</label><br>
		    <label><input type="radio" name="books[]" value="50">50+</label></div><br>
		<p>Ваши комментарии</p>
		   <textarea name="comment"></textarea><br>
		   <select size="3">
			 <option>Первая позиция</option>
			 <option>Вторая позиция</option>
		 	 <option>Третья позиция</option>
		   </select>
	    </fieldset>
	    <fieldset>
	    	<legend>И в заключении</legend>
	    	<input class="name" type="text" name="field" placeholder="Это поле было введено до вас">
	    	<label for="mail">E-mail</label>
	    	<input class="name" id="mail" type="email" name="email">
	    <p>Хотите подписаться на самую модную рассылку спама?</p>
	      <div class="it">Выберите категории</div>
	      <div>
	    	<label><input type="checkbox" name="subscribe[]" value="Оборудование">Tools</label><br>
	    	<label><input type="checkbox" name="subscribe[]" value="Как приготовить обеды">Как приготовить обеды</label><br>
	    	<label><input type="checkbox" name="subscribe[]" value="Заработай миллион за два дня!">Заработай миллион за два дня!</label><br>
	      </div>
	    <p>На сколько сложная задача:</p>
	      <div>
	    	<label><input type="radio" name="level[]" value="Совсем нет">Совсем нет</label><br>
	    	<label><input type="radio" name="level[]" value="Так себе">Ok</label><br>
	    	<label><input type="radio" name="level[]" value="Еле справились">Еле справились</label>
	      </div>
	    </fieldset><br>
	    <button type="submit" name="send">Отправить</button>
	</form>

	<?php

		$sql = "INSERT INTO personaldata (`id`, `name`, `familyname`, `sex`, `age`, `male`, `date_of_birth`, `mar_status`, `residence`, `hobby`, `books`, `comment`, `email`, `subscribe`, `level`) VALUES (NULL, 'Alise', 'Cooper', 'female', '25', 'girl', '2019-02-13 00:00:00', 'not married', 'Los Angeles', 'Music', '100', 'blablabla', 'alicw@gmail.com', 'no', 'no');";
		mysqli_query($conn, $sql);

		$sql = "SELECT * FROM personaldata;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)) {
				echo "Имя: ".$row['name'];
			}
		}

	?>

</body>
</html>