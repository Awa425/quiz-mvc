function CheckPassword(inputtxt) 
    { 
    var paswd=  '/^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{6}$/';
    if(inputtxt.value.match(paswd)) 
    { 
        return true;
    }
    else
    { 
        return false;
    }
} 
