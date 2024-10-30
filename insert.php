<?php

include_once("db.php");

$sql = "CREATE TABLE IF NOT EXISTS feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  message TEXT NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
	echo "Ошибка: " . mysqli_error($conn);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {


	if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])) {
		//echo "Пожалуйста, заполните все поля";
	} else {


		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];


		$sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

		$result = mysqli_query($conn, $sql);


		if ($result) {
			echo json_encode(array('code' => 200, 'message' => 'Данные сохранены в базу данных'));
		} else {
			echo json_encode(array('code' => 500, 'message' => 'Произошла ошибка'));
		}
	}
}
