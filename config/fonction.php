<?php 

    function link_to(string $ctr, string $action){
       echo "<input type='hidden' name='controller' value='$ctr'> <br>
             <input type='hidden' name='action' value='$action'>";
    }

    function longueur($chaine)
    {
        $i = 0;
        while ($chaine[$i]) {
           $i++;
        }
        return $i;
    }

    function is_Int($x)
    {
        $j=0;
        for ($i=0; $i <= longueur($x); $i++) 
        { 
            if ($x[$i]>=-9 && $x[$i]<=9) {
                  return true;
            }
        }
                
    }
    function checkEmail(string $email) { //Tester si l'email est valide :  javascript : valid email
//     $mail =' /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        $mail ='/^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/';
        if (preg_match($mail, $email)) {
            return true;
        } 
    }
?>