<?php 

    function link_to(string $ctr, string $action){
       echo "<input type='hidden' name='controller' value='$ctr'> <br>
             <input type='hidden' name='action' value='$action'>";
    }
?>