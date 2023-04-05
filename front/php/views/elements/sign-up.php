<?php
$webroot = "http://localhost/crud-10/";
?>


<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
        <div class=" main-content-area">
            <div class="wrap-login-item ">
                <div class="register-form form-item ">
                    <form class="form-stl" action="<?=$webroot;?>admin/users/sign-up.php" name="frm-login" method="post" >
                        <fieldset class="wrap-title">
                            <h3 class="form-title">Create an account</h3>
                            <h4 class="form-subtitle">Personal infomation</h4>
                        </fieldset>
                        <fieldset class="wrap-input">
                            <label for="frm-reg-lname">User Name*</label>
                            <input type="text" id="frm-reg-lname" name="user_name" value="" placeholder="User name*">
                        </fieldset>
                        <fieldset class="wrap-input">
                            <label for="frm-reg-pass">Password *</label>
                            <input type="password" id="frm-reg-pass" name="password" value="" placeholder="Password">
                        </fieldset>

                        <fieldset class="wrap-input">
                            <label for="frm-reg-lname">Full Name*</label>
                            <input type="text" id="frm-reg-lname" name="full_name" value="" placeholder="Full name*">
                        </fieldset>

                        <fieldset class="wrap-input">
                            <label for="frm-reg-email">Email Address*</label>
                            <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                        </fieldset>
                        <fieldset class="wrap-input">
                            <label for="frm-reg-email">Phone*</label>
                            <input type="tel" id="frm-reg-email" name="phone_number" placeholder="Phone Number">
                        </fieldset>

                        <input type="submit" class="btn btn-sign" value="Register" name="register">
                    </form>
                </div>
            </div>
        </div><!--end main products area-->
    </div>
</div><!--end row-->
