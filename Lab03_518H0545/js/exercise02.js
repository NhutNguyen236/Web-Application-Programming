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
	let table = document.getElementById("table");
	let row = table.insertRow();
	let cell1 = row.insertCell(0);
	let cell2= row.insertCell(1);
	let cell3 = row.insertCell(2);
	//let cell4 = row.insertCell(3);
	
	if(checkValidate() == true){
		cell1.innerHTML = firstName;
		cell2.innerHTML = lastName;
		cell3.innerHTML = Email;
		return true;
	}
	else{
		alert("Not good");
		return false;
	}
}