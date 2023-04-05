<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
        <div class=" main-content-area">
            <div class="wrap-login-item ">
                <div class="login-form form-item form-stl">
                    <form name="frm-login" action="<?=$webroot?>admin/users/login-processor.php" method="post">
                        <fieldset class="wrap-title">
                            <h3 class="form-title">Log in to your account</h3>
                        </fieldset>
                        <fieldset class="wrap-input">
                            <label for="frm-login-uname">User Name:</label>
                            <input type="text" id="frm-login-uname" name="user_name" value=""  placeholder="Type your user name">
                        </fieldset>
                        <fieldset class="wrap-input">
                            <label for="frm-login-pass">Password:</label>
                            <input type="password" id="frm-login-pass" name="password" placeholder="************">
                        </fieldset>

                        <input type="submit" class="btn btn-submit" value="Login" name="submit">
                    </form>
                </div>
            </div>
        </div><!--end main products area-->
    </div>
</div><!--end row-->
