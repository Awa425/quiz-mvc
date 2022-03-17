///////////////////Declaration du cote page connexion///////////////////////////////
const form = document.getElementById('form');
// const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
// const password2 = document.getElementById('password2');
const log = document.getElementById('log');
const pass = document.getElementById('pass');
const btn = document.getElementById('btn');



//Functions-------------------------------------------------------------
function activateDesactivate(mybutton, etat) {
    
}

function CheckPassword(input) 
    { 
     paswd = /^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{6,50}$/;
    if(paswd.test(input.value))
    { 
        return true;
    }
   
} 
function showError(input, message) { //Afficher les messages d'erreur
    const formControl = input.parentElement;
    // formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}
//
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}
//
function checkEmail(input) { //Tester si l'email est valide :  javascript : valid email
    // const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const re = /^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/;
    if (re.test(input.value.trim().toLowerCase())) {
        return true;
    } else {
        return false;
    }
}
//
function checkRequired(inputArray) { // Tester si les champs ne sont pas vides
    inputArray.forEach(input => {
        if (input.value.trim() === '') {
            showError(input, `${getFieldName(input)} is required`);
        } else {
            showSuccess(input);
        }
    });
}
//
function getFieldName(input) { //Retour le nom de chaque input en se basant sur son id
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}
//
function checkLength(input, min, max) { //Tester la longueur de la valeur  d'un input
    if (input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters!`)
    } else if (input.value.length > max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters !`);
    } else {
        showSuccess(input);
    }
}
//
// function checkPasswordMatch(input1, input2) {
//     if (input1.value !== input2.value) {
//         showError(input2, 'Passwords do not match!');
//     }
// }





//Even listeners--------------------------------------------------------
////////////Cote page connexion/////////////////////////
email.addEventListener('input', ()=>{
    if (!checkEmail(email)) {
        log.style.border= '2px solid red';
    }
    else{
        log.style.border= '2px solid green';
    }
    password.addEventListener('input', ()=>{
        if (!CheckPassword(password)) {
           
            pass.style.border= '2px solid red';
        }
        else{
            pass.style.border= '2px solid green';
            btn.removeAttribute('disabled');
        }
    });
});

a.addEventListener('click', ()=>{
    a.style.color='red';
})

