<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<!-- Custom styles for this template -->
<style>
    body {
        padding-top: 50px;
        background-color:#333;
    }

    .starter-template {
        padding: 40px 15px;
        text-align: center;
    }
</style>

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<body>
<?php include 'nav.php'; ?><br>
<div class="container">
    <div class="row"><br><br>
        <div class="col-xs-12 col-md-10 col-mds-push-1 col-lg-6 col-lg-push-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="form-signing-heading">Login</h2>
                </div>
                <div class="panel-body">
                    <form action="procesaLogin.php" method="post" class="form-signin">


                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Username</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Username</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">

                            </div>
                        </div>
                        <?php if (isset($_REQUEST['errorLogin'])): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-warning" style="color:#d30000"></i> Error
                                </div>
                                <div class="panel-body">
                                    <p><?php  echo $_REQUEST['errorLogin'] ; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <br>
                        <button style="background-color:#C30000; color:white;" class="btn btn-lg  btn-block">
                            Entrar
                        </button>
                        <br>

                    </form>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include 'footer.php'; ?>
</body>
</html>
