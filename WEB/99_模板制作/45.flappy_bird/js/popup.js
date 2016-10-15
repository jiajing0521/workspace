var e = document.getElementById('popup');
var isDisplayed = false;
var hasClosed = false;
var x = document.getElementById('close');

var url = window.location.href;
var uri = url.substring(22, 26);

if(uri == "game")
	setTimeout(function() {
		e.className = "animated slideInUp";
		e.style.visibility = 'visible';
	}, 10000);

//if (getCookie('popup')) {
//hasClosed = true;
//}

var didScroll = false;
document.addEventListener('scroll', function() {
	didScroll = true;
});

setInterval(function() {
	if(didScroll) {
		didScroll = false;

		if(hasClosed || uri == "game")
			return;

		var h = document.documentElement,
			b = document.body,
			st = 'scrollTop',
			sh = 'scrollHeight';

		var percent = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;

		if(percent > 95 && isDisplayed) {
			e.className = "animated slideOutDown";
			isDisplayed = false;
		} else if(percent < 95 && percent > 70 && !isDisplayed) {
			isDisplayed = true;
			e.className = "animated slideInUp";
			e.style.visibility = 'visible';
		}
	}
}, 200);

x.addEventListener("click", function() {
	hasClosed = true;
	isDisplayed = false;
	e.className = "animated slideOutDown";
	//setCookie('popup', 'closed', 1);
});

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while(c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if(c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return false;
}