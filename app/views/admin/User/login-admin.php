<div class="login-logo">
    <a href=""><b>Admin</b>LTE</a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?if(isset($_SESSION['error'])):?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Ошибка!</h4>
            <?=$_SESSION['error']; unset($_SESSION['error'])?>
        </div>
    <?endif;?>

    <form action="<?=ADMIN?>/user/login-admin" method="post">
        <div class="form-group has-feedback">
            <input name="login" type="text" class="form-control" placeholder="Login" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input  name="password" type="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">

            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <div class="social-auth-links text-center">


    </div>



</div>