

<?php

if(isset($_COOKIE['usercookie'])){
    //ASSERT: a user is signed in right now
    setcookie('usercookie', "", time() - 3600);
    //ASSERT: cookie is unset
    echo $_COOKIE['usercookie'];
}

?>