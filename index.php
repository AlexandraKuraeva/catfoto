<!DOCTYPE html>
<html>

<head>
	<title>Feedback Form</title>
	<link rel="stylesheet" href="./styles.css">
</head>

<body>


	<div class="block-form">
		<div class="block-form__wrapper">
			<h2>Feedback Form</h2>
			<div class="block-form__body">

				<form method="post" action="insert.php" class="block-form__content">

					<div class="block-form__item">
						<label for="name" class="label">Name:</label>
						<input type="text" id="name" name="name" value="" class="input">
					</div>

					<div class="block-form__item">
						<label for="email" class="label">Email:</label>
						<input type="email" id="email" name="email" value="" class="input">

					</div>
					<div class="block-form__item">
						<label for="message" class="label">Message:</label>
						<textarea id="message" name="message" value="" class="textarea"></textarea>
					</div>

					<p class="info" id="info"></p>

					<input type="submit" value="Submit" id="submitBtn" class="btn">
				</form>


			</div>
		</div>
	</div>

	<script type="text/javascript" src="./script.js"></script>

</body>

</html>