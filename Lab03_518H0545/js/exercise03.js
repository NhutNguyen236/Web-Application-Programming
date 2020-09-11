function helloMessage(){
    alert("Xin chào các bạn");

    let message_id = document.getElementById('message');

    let message = message_id.value;

    //Check if the input is empty
    if(message === ""){
        document.getElementById("error_message").innerHTML = "Your message is empty";
        message_id.focus();
    }

    else{
        document.getElementById("message_show").innerHTML = message;
    }

}
