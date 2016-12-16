

<?php

if(isset($_COOKIE['usercookie'])){
    //ASSERT: a user is signed in right now
    unset($_COOKIE['usercookie']);
    //ASSERT: cookie is unset
    echo $_COOKIE['usercookie'];
}

?>