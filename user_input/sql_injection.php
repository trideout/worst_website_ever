<?php
if (isset($_REQUEST['username']) && isset($_REQUEST['password']))
{
    $query      = "SELECT * FROM users WHERE username='" . $_REQUEST['username'] . "' AND password='" . $_REQUEST['password'] . "'";
    echo $query;
    $mysqli = new mysqli('localhost', 'root', 'secret', 'bad_data');
    $results    = $mysqli->query($query);
    if ($results->num_rows > 0)
    {
        $user = $results->fetch_assoc();
        echo '<h1>Welcome ' . $user['username'] . '</h1>';
    }
    else
    {
        echo '<h1>Invalid Credentials</h1>';
    }
}
?>
<h1>Please Log In as kalen/hunter2</h1>
<form>
    <label for="username">Username</label>
    <input type="text" name="username">
    <label for="password">Password</label>
    <input type="text" name="password">
    <input type="submit">
</form>

<?php
if (isset($_REQUEST['username']))
{
    ?>
    <span style="font-weight:bold">Don't type this in anything</span>
    <br>
    <textarea>
' OR true OR 1='
</textarea>
    <?php
}
?>