<?php

if (isset($_REQUEST['hash']))
{
    echo '<h1>' . md5($_REQUEST['hash']) . '</h1>';
}
?>
<form>
    <h1>Hash your password HERE</h1>
    <label for="hash">Password</label>
    <input name="hash">
    <input type="submit">
</form>
<br><br>
<?php
if (isset($_REQUEST['hash'])){
?>
<a href="https://crackstation.net/" target="_blank">Crack It!</a>
<?php
}
?>