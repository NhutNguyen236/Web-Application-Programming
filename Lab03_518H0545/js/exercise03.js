//This function is for showing message parallelly with the input message below 
function displayMessage(){
    let mess = document.getElementById("message").value;
    document.getElementById("message_show").innerHTML = mess;
}

function changeColor(){
    let color = document.getElementById("color").value;
    let mess_id = document.getElementById("message_show");

    mess_id.style.color = color;
}

//make text bold and nothing else
function makeitBold(){
    let mess_id = document.getElementById("message_show");
    let bold = document.getElementById("bold");

    if(bold.checked){
        mess_id.style.fontWeight = "bold";
    }

    else{
        mess_id.style.fontWeight = "normal";
    }
}

//make text italic and nothing else
function makeitItalic(){
    let mess_id = document.getElementById("message_show");
    let italic = document.getElementById("italic");

    if(italic.checked){
        mess_id.style.fontStyle = "italic";
    }

    else{
        mess_id.style.fontStyle = "normal";
    }
}

//make text underline and nothing else
function makeitUnderline(){
    let mess_id = document.getElementById("message_show");
    let underline = document.getElementById("underline");

    if(underline.checked){
        mess_id.style.textDecoration = "underline";
    }

    else{
        mess_id.style.textDecoration = "none";
    }
}

//This function is for showing up an alert with message_id.value
function showMessage(){
    let mess_id = document.getElementById("message");

    let userMess = mess_id.value;

    //console.log(typeof userMess);
    
    if(userMess === ""){
        alert("Message is empty");
    }
    else{
        alert(userMess);
    }
}