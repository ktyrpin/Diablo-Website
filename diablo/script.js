var form = document.getElementById('styleForm');
var radios = form.elements['style'];

form.addEventListener('change', function () {
	var selectedStyle = form.querySelector('input[name="style"]:checked').value;
	document.getElementById('pageStyle').href = selectedStyle + '.css';
	document.cookie = 'style=' + selectedStyle + '; path=/; max-age=' + 30 * 24 * 60 * 60;
});
