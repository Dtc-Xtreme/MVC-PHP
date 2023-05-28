document.addEventListener("DOMContentLoaded", function(){
    let passField1 = document.getElementById("password1");
    let passField2 = document.getElementById("password2");

    passField1.addEventListener("keyup", function() {
        if(passField1.value.length < 8){
            passField1.classList.add("error-box");
        }else{
            passField1.classList.remove("error-box");
        }
    }); 

    passField2.addEventListener("keyup", function() {
        if(passField2.value.length < 8){
            passField2.classList.add("error-box");
        }
        else{
            passField2.classList.remove("error-box");
        }

        if(passField1.value !== passField2.value || passField2.value.length > 8){
            passField1.classList.add("error-box");
            passField2.classList.add("error-box");
        }else{
            passField1.classList.remove("error-box");
            passField2.classList.remove("error-box");
        }
    }); 
})