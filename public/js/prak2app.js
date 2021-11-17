const form = document.getElementById("form");
const username = document.getElementById("username");
const address = document.getElementById("address");
const mail = document.getElementById("mail");
const pass = document.getElementById("pass");
const phone = document.getElementById("phone");
const option = document.getElementById("option");
const zipcode = document.getElementById("zipcode");

form.addEventListener('submit', e => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {
    const usernameValue = username.value.trim();
    const addressValue = address.value.trim();
    const mailValue = mail.value.trim();
    const passValue = pass.value.trim();
    const phoneValue = phone.value.trim();
    const zipcodeValue = zipcode.value.trim();

    if(usernameValue === '') {
		setErrorFor("username", "Username cannot be blank");
	} else {
		setSuccessFor("username");
	}

    if(mailValue === '') {
		setErrorFor(mail, "Username cannot be blank");
	} else {
		setSuccessFor(mail);
	}
	
	if(addressValue === '') {
		setErrorFor(address, "Address cannot be blank");
	} else {
		setSuccessFor(address);
	}
	
	if(passValue === '') {
		setErrorFor(pass, "Password cannot be blank");
	} else {
		setSuccessFor(pass);
	}

    if(phoneValue === '') {
		setErrorFor(phone, "Password cannot be blank");
	} else {
		setSuccessFor(phone);
	}
	
	if(zipcodeValue === '') {
		setErrorFor(zipcode, "zipcode cannot be blank");
	} else {
		setSuccessFor(zipcode);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}