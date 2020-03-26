function validate(){
    var name = document.getElementById('name');
    var mobile = document.getElementById('mobile');
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var confirmpassword = document.getElementById('confirmpassword');

    if(!isNaN(name.value)){
        document.getElementById('signup-name').innerHTML="-- Name must contain characters only. --";
        return false;
    }
    else{
        document.getElementById('signup-name').innerHTML="";
    }
    
    if(isNaN(mobile.value)){
        document.getElementById('signup-mobile').innerHTML="-- Please enter numbers only. --";
        return false;
    }
    else{
        document.getElementById('signup-mobile').innerHTML="";
    }

    if(mobile.value.length!==10){
        document.getElementById('signup-mobile').innerHTML="-- Mobile number must contain 10 digits. --";
        return false;
    }
    else{
        document.getElementById('signup-mobile').innerHTML="";
    }

    if(username.value.length<=2 || username.value.length>15){
        document.getElementById('signup-username').innerHTML="-- Username length should be between 3 to 15 characters. --";
        return false;
    }
    else{
        document.getElementById('signup-username').innerHTML="";
    }

    if(!isNaN(username.value)){
        document.getElementById('signup-username').innerHTML="-- Username must contain characters. --";
        return false;
    }
    else{
        document.getElementById('signup-username').innerHTML="";
    }

    if(!isNaN(username.value.charAt(0))){
        document.getElementById('signup-username').innerHTML="-- Username must start with a character. --";
        return false;
    }
    else{
        document.getElementById('signup-username').innerHTML="";
    }

    if(password.value.length<= 6 || password.value.length>20){
        document.getElementById('signup-password').innerHTML="-- Password length should be between 7 to 20 characters. --";
        return false;
    }
    else{
        document.getElementById('signup-password').innerHTML="";
    }

    if(confirmpassword.value!==password.value){
        document.getElementById('signup-confirmpassword').innerHTML="-- Password not matching. --";
        return false;
    }
    else{
        document.getElementById('signup-confirmpassword').innerHTML="";
    }
}