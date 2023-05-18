let stage = 10, flagstop = false;
const myFunc = () => {
	
	if (flagstop != true) {
		const xhr = new XMLHttpRequest();
		xhr.open('GET','php/ContentSec.php?stage='+stage);
		xhr.responseType = 'json';
		xhr.onload = () => {
		
			if (xhr.response.length == 0) {
				flagstop = true;
			} else {
				const write = document.getElementById('global');
				xhr.response.forEach(element => write.innerHTML +='<div class=\"light\"><div class=\"deep\">'+ element['ID']+'.' + element['Post']+'</div></div><br>');
				stage += 10;
			}	
		}
		xhr.send();
	}
};

const checkPosition = () => {  
	const height = document.body.offsetHeight
	const screenHeight = window.innerHeight
	const scrolled = window.scrollY
	const threshold = height - screenHeight / 4
	const position = scrolled + screenHeight

  if (position >= threshold) {
  	myFunc();   
  }
};

const throttle = (callee, timeout) => {
	let timer = null
	return function perform(...args) {
		if (timer) return
		timer = setTimeout(() => {
      			callee(...args)
			clearTimeout(timer)
      			timer = null
    		}, timeout)
 	}
};

(() => {
  window.addEventListener('scroll', throttle(checkPosition, 250))
  window.addEventListener('resize', throttle(checkPosition, 250))
})()
