const btn = document.getElementById('submitBtn')

btn.addEventListener('click', function (event) {
	event.preventDefault()

	const name = document.getElementById('name').value
	const email = document.getElementById('email').value
	const message = document.getElementById('message').value
	const info = document.getElementById('info')

	if (name.trim() !== '' && email.trim() !== '' && message.trim() !== '') {
		fetchData(name, email, message)
	} else {
		info.innerHTML = 'Пожалуйста, заполните все поля'
	}
})

function fetchData(name, email, message) {
	fetch('./insert.php', {
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded',
		},
		body: 'name=' + name + '&email=' + email + '&message=' + message,
	})
		.then(response => response.json())
		.then(data => {
			if (data.message) {
				clearInput()
				info.innerHTML = data.message
			}
		})
		.catch(error => {
			console.log(error)
		})
}

function clearInput() {
	document.getElementById('name').value = ''
	document.getElementById('email').value = ''
	document.getElementById('message').value = ''
}
