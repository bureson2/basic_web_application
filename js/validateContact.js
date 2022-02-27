function controlContact(e){	
	
	var textEmail = email.value;
	var textObject = object.value;
	var textPhone = phone.value;

	if(textEmail.indexOf("@") > 0){
		email.classList.remove('error');
	} else {	
		e.preventDefault();
		email.classList.add('error');
	}	
	
	if(textObject.length > 1 && textObject.length < 21){
		object.classList.remove('error');
	} else {	
		e.preventDefault();
		object.classList.add('error');
	}
	
	if(textPhone.length == 9){
		phone.classList.remove('error');
	} else {	
		e.preventDefault();
		phone.classList.add('error');
	}
}

var link = document.createElement('link'); 
// set the attributes for link element  
link.rel = '../css/stylesheet';        
link.type = '../css/text/css';       
link.href = '../css/style.css'; 

var email = document.querySelector("[name=email]");
var object = document.querySelector("[name=object]");
var phone = document.querySelector("[name=phone]");

var form = document.querySelector("form");
form.addEventListener('submit', controlContact); 
email.addEventListener('blur',controlContact); 
object.addEventListener('blur',controlContact);
phone.addEventListener('blur',controlContact);