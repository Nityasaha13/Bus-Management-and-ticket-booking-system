const resetBtn = document.getElementById('reset-btn');

resetBtn.addEventListener('click', () => {
	document.querySelector('form').reset();
});