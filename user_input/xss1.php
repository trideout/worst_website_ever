<?php

if (isset($_GET['name'])){
    echo '<h1>Welcome ' . $_GET['name'] .'!!!</h1><a href="#" onclick="window.close()">Continue</a>';
}
else{
    echo '<h1>Please enter your name!</h1>';
    echo '
    <form>
    <label for="name">Name</label>
    <input name="name" value="">
    <input type="submit" value="Submit">
    </form>
    ';
}