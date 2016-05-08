<?php
require_once('class.translation.php');

if(isset($_GET['lang']))
    $translate = new Translator($_GET['lang']);
else
    $translate = new Translator('es');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>

<?php include 'nav.php'; ?>
    <!-- SERVICES -->
    <section id="">
        <div class="container">
            <div class="row">
                <div class="wow slideInUp  col-xs-12  text-center">
                    <br><br><br><br><br><br><br><br>
                        <?php include 'form.php'; ?>
                </div>

            </div>
    </div>
</section>
<!-- /SERVICES -->

    <?php include 'footer.php'; ?>
</body>
</html>