<?php
if(isset($_REQUEST['password']))
{
    echo '<H1>Thank you for registering</H1>';
}
?>
<h1>Register Your Account</h1>
<form id="userform">
    <label for="username">Username</label>
    <input type="text" name="username">
    <label for="pasword">Password</label>
    <input type="password" name="password" id="password">
    <input type="hidden" name="group" value="user">
    <input type="submit">
</form>
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
<script>
    $('#userform').on('submit', function(){
        $passLength = $('#password').val().length;
        if ($passLength < 8)
        {
            alert('Your password must be at least 8 characters long');
            return false;
        }
        return true;
    });
</script>