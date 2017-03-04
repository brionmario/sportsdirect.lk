function fadeIn(){
	//logo script
	var logo = document.getElementById('sdLogo');
	logo.style.transitionDelay="-10s";
	logo.style.transition="opacity 5s";
	logo.style.opacity=1;
	
	//welcome script
	var w = document.getElementById('welcome');
	w.style.transitionDelay="-5s";
	w.style.transition="opacity 3s";
	w.style.opacity=1;
	
	//to script
	var t = document.getElementById('to');
	t.style.transitionDelay="-1s";
	t.style.transition="opacity 3s";
	t.style.opacity=1;
	
}
