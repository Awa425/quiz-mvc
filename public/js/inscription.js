///////////////////////Declaration du cote page inscription//////////////////////////
const ins_prenom = document.getElementById('ins_prenom');
const ins_nom = document.getElementById('ins_nom');
const ins_email = document.getElementById('ins_email');
const ins_password = document.getElementById('ins_password');
const ins_password2 = document.getElementById('ins_password2');
const ins_submit = document.getElementById('ins_submit');
console.log(ins_prenom);

//////////////Fonctions///////////////
function checkEmail(input) { //Tester si l'email est valide 
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (re.test(input.value.trim().toLowerCase())) {
        return true;
    } else {
        return false;
    }
}

function CheckPassword(input) 
    { 
     paswd = /^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{6,50}$/;
    if(paswd.test(input.value))
    { 
        return true;
    }
   
} 

function checkLength(input, min) { 
    if (input.value === "" || input.value.length < min) {
       return true
    } 
}


///////////////////cote page inscription//////////////////////
ins_prenom.addEventListener('input', ()=>{
    if(!checkLength(ins_prenom, 3)){
         ins_prenom.style.border="2px solid green"; 
        }
    else ins_prenom.style.border="2px solid red";  
    
    ins_nom.addEventListener('input', ()=>{
        if(!checkLength(ins_nom, 3)){
             ins_nom.style.border="2px solid green"; 
            }
        else ins_nom.style.border="2px solid red";  
    })

    ins_email.addEventListener('input', ()=>{
        if(checkEmail(ins_email)){
            ins_email.style.border='2px solid green';
        }
        else ins_email.style.border='2px solid red';
    })

    ins_password.addEventListener('input', ()=>{
        if(CheckPassword(ins_password)){
            ins_password.style.border='2px solid green';
        }
        else ins_password.style.border='2px solid red';
    })

    ins_password2.addEventListener('input', ()=>{
        if(ins_password2.value === ins_password.value){
            ins_password2.style.border='2px solid green';
            ins_submit.removeAttribute('disabled');
        }
        else ins_password2.style.border='2px solid red';
    })
})