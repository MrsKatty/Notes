<?php

/** @var string $action */
?>

<div class="picture_signIn">

    <div class="form_signIn_container">

    <form action="<?=$action?>" method="post" class="form_signIn">

<div class="signIn">

        <div class="label_signin">
         <label for="exampleInputEmail1" class="margin_input_signin">Login</label>
            <label for="exampleInputPassword1"class="margin_input_signin" >Password</label>
        </div>

        <div class="input_signin">
            <input type="text"  name="login" class="margin_input_signin">
            <input type="password"  id="exampleInputPassword1" name="password" class="margin_input_signin">
        </div>

</div>
        <div class="ok_In">
            <input type="submit" value="Log in" class="okbuttomIn">
        </div>
</form>
    </div>
</div>