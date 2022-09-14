let inputCount = (increment) => {
	let incrementValues = document.querySelectorAll(increment)

	incrementValues.forEach(item => {
		item.addEventListener('click', (event) => {
			let countValue = event.target.parentElement.children[0]

			let parseValue = parseInt(countValue.value) + 1;

			countValue.value = parseValue
		})
	})

}

export default inputCount;

