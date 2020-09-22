<?php

?>
<div class="form_signUp_container">
<form action="?type=signup&action=add" method="post" class="form_signUp">
    <div class="signUp">


        <div class="label_signup">
            <label class="margin_input_signup"> Login </label>
            <label class="margin_input_signup"> Password </label>
            <label class="margin_input_signup"> Fio </label>
        </div>

        <div class="input_signup">
            <input type="text" name="login" class="margin_input_signup">
            <input type="text" name="password" class="margin_input_signup">
            <input type="text" name="FIO" class="margin_input_signup">
        </div>

        <!--    <select name="group_id">-->
        <!--       option-->
        <!--    </select>-->


    </div>
    <div class="ok">
        <input type="submit" value="ok" class="okbuttom">
    </div>


    <div class="text_signUp">

        <p> By continuing with your Google, Apple or Email account, you agree to
            <span class="text_color"> the Terms of Service</span> and
            <span class="text_color"> Privacy Policy </span> </p>
    </div>

</form>
</div>