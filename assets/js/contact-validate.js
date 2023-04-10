function clearErrors() {
    errors = document.getElementsByClassName('formerror');
    for (let item of errors) {
        item.innerHTML = "";
        document.getElementById("cont_name").style.borderColor = "#ced4da";
        document.getElementById("cont_email").style.borderColor = "#ced4da";
        document.getElementById("cont_message").style.borderColor = "#ced4da";
        document.getElementById("cont_phone").style.borderColor = "#ced4da";
    }
}

function seterror(id, error) {
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function aniket_my_validate() {
    var returnval = true;
    clearErrors();

    var cont_name = document.forms['myForm']["cont_name"].value;

    if(isNaN(cont_name)){
        if (cont_name.trim().length < 5) {
            var returnval = false;
            fcname = document.getElementById("cont_name");
            fcname.style.borderColor = "red";
            seterror("fname", "*Length of name is too short");
            return returnval;
        }
    }
    else{
        var returnval = false;
        fcname = document.getElementById("cont_name");
        fcname.style.borderColor = "red";
        seterror("fname", "*Please enter a valid name!");
        return returnval;
    }

    var cont_phone = document.forms['myForm']["cont_phone"].value;

    if (cont_phone.length > 10 || cont_phone.length < 10) {
        var returnval = false;
        fcname = document.getElementById("cont_phone");
        fcname.style.borderColor = "red";
        if(cont_phone.length < 10){
            seterror("fphone", "*Length of number is too short");
            return returnval;
        }else{
            seterror("fphone", "*Length of number is too long");
            return returnval;
        }
    }

    var cont_email = document.forms['myForm']["cont_email"].value;

    if (cont_email.trim().length > 30) {
        var returnval = false;
        fcname = document.getElementById("cont_email");
        fcname.style.borderColor = "red";
        seterror("femail", "*Length of email is too long");
        return returnval;
    }

    var cont_message = document.forms['myForm']["cont_message"].value;

    if (cont_message.trim().length > 255) {
        var returnval = false;
        fcname = document.getElementById("cont_message");
        fcname.style.borderColor = "red";
        seterror("fmessage", "*Length of email is too long");
        return returnval;
    }

    return returnval;
}