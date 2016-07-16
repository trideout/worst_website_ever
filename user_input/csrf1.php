<?php
    if (isset($_REQUEST['password'])) {
        //Reset the users password to the requested one
        echo 'Your password has been reset to: ' . $_REQUEST['password'];
    }
?>
<h1>Reset Your Password</h1>
<form>
    <label for="password">New Password</label>
    <input type="password" name="password">
    <input type="submit">
</form>
<a href="#" onclick="window.close()">Close</a>