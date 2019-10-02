<?php
    include 'utils.inc.php';

    start_page('Login');
?>


<form action="test-pass.php" method="post">
    <input type="text" name="login" placeholder="Login"> <br/>
    <input type="password" name="pwd" placeholder="Password"> <br/>
    <input type="submit" name="action">
</form>