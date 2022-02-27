function controlService(e){	
	
	var textName = firstName.value;
	var textSurname = lastName.value;
	var textEmail = email.value;
	var textPhone = phone.value;
	var textStreet = street.value;
	var textCity = city.value;
	var textPSC = psc.value;
	var textCountry = country.value;

	
	if(textName.length >= 2 && textName.length < 16){
		firstName.classList.remove('error');
	} else {	
		e.preventDefault();
		firstName.classList.add('error');
	}
	
	if(textSurname.length >= 2 && textSurname.length < 16){
		lastName.classList.remove('error');
	} else {	
		e.preventDefault();
		lastName.classList.add('error');
	}
	
	if(textEmail.indexOf("@") > 0){
		email.classList.remove('error');
	} else {	
		e.preventDefault();
		email.classList.add('error');
	}	
	
	if(textPhone.length == 9){
		phone.classList.remove('error');
	} else {	
		e.preventDefault();
		phone.classList.add('error');
	}
	
	if(textStreet.length >= 8 && textStreet.length < 25){
		street.classList.remove('error');
	} else {	
		e.preventDefault();
		street.classList.add('error');
	}
	
	if(textCity.length >= 2 && textCity.length < 20){
		city.classList.remove('error');
	} else {
		e.preventDefault();
		city.classList.add('error');
	}
	
	if(textPSC.length == 5){
		psc.classList.remove('error');
	} else {	
		e.preventDefault();
		psc.classList.add('error');
	}
	
	if(textCountry.length >= 3 && textCountry.length < 20){
		country.classList.remove('error');
	} else {	
		e.preventDefault();
		country.classList.add('error');
	}
	
}

var link = document.createElement('link'); 
// set the attributes for link element  
link.rel = '../css/stylesheet';        
link.type = '../css/text/css';       
link.href = '../css/style.css'; 

var firstName = document.querySelector("[name=name2]");
var lastName = document.querySelector("[name=surname2]");
var email = document.querySelector("[name=email]");
var phone = document.querySelector("[name=phone]");
var street = document.querySelector("[name=street2]");
var city = document.querySelector("[name=city2]");
var psc = document.querySelector("[name=psc2]");
var country = document.querySelector("[name=country2]");

var form = document.querySelector("form");
form.addEventListener('submit', controlService); 
firstName.addEventListener('blur', controlService);
lastName.addEventListener('blur', controlService); 
email.addEventListener('blur', controlService);
phone.addEventListener('blur', controlService); 
street.addEventListener('blur', controlService);
city.addEventListener('blur', controlService); 
psc.addEventListener('blur', controlService);
country.addEventListener('blur', controlService);


















