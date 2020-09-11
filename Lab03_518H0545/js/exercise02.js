function checkValidate(){
	let firstname_id = document.getElementById('firstname');
	let lastname_id = document.getElementById('lastname');
	let email_id = document.getElementById('email');
	let firstname_error = document.getElementById('alert_firstname');
	
	
	let firstName = firstname_id.value;
	let lastName = lastname_id.value;
	let Email = email_id.value;
	
	//Check first name if it is empty or not
	if(firstName === "" && lastName === "" && Email === ""){
		firstname_error.innerHTML = "Please enter your first name";
		document.getElementById('alert_lastname').innerHTML = "Please enter your last name";
		document.getElementById('alert_email').innerHTML = "Please enter your email";
		return false;
	}
	
	//Check if firstname is still empty
	if(firstName === ""){
		document.getElementById('alert_firstname').innerHTML = "Please enter your first name";
		firstname_id.focus();
		return false;
	}
	
	//Check if lastname is still empty
	if(lastName === ""){
		document.getElementById('alert_lastname').innerHTML = "Please enter your last name";
		lastname_id.focus();
		return false;
	}
	
	//Check if email is still empty
	else if(Email === ""){
		document.getElementById('alert_email').innerHTML = "Please enter your email";
		email_id.focus();
		return false;
	}
	
	//check if email is valid
	else if(!Email.includes("@")){
		document.getElementById('alert_email').innerHTML = "Your email is invalid, dun fool around";
		return false;
	}
	
	else{
		return true;
	}
	
}

function clearEmailAlert(){
	let errorMessage = document.getElementById('alert_email').innerHTML = "";
}
	
function clearFirstNameAlert(){
	let errorMessage = document.getElementById('alert_firstname').innerHTML = "";
}

function clearLastNameAlert(){
	let errorMessage = document.getElementById('alert_lastname').innerHTML = "";
}

function InsertValue(){
	if(checkValidate() == true){
		let firstname_id = document.getElementById('firstname');
		let lastname_id = document.getElementById('lastname');
		let email_id = document.getElementById('email');
		
		let firstName = firstname_id.value;
		let lastName = lastname_id.value;
		let Email = email_id.value;

		//row_define
		let tr = document.createElement('tr');
		let td1 = document.createElement('td');
		let td2 = document.createElement('td');
		let td3 = document.createElement('td');
		let td4 = document.createElement('td');

		td1.innerHTML = firstName;
		td2.innerHTML = lastName;
		td3.innerHTML = Email;
		td4.innerHTML = '<button>Delete</button>';

		tr.appendChild(td1);
		tr.appendChild(td2);
		tr.appendChild(td3);
		tr.appendChild(td4);

		let tbody = document.getElementById('tbody');
		tbody.appendChild(tr);
		
		//reset form after clicking ADD
		document.getElementById("form").reset();
	}

	else{
		alert("Not good");
		return false;
	}
}

window.addEventListener('keyup',function(e){
	if(e.keyCode === 13){
		InsertValue();
	}
});

