

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Title</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class="container">
         <h1>Ejemplos Extra PHP</h1>

            <div class="row">
                <div class="col-xs-12">
                    <h2>Ciudades de España</h2>
                    <?php $ciudades = array('Madrid', 'Barcelona', 'Valencia');  ?>
                    <p>He visitado  <?php echo $ciudades{1} ?></p>
                    <p>También he visitado <?= $ciudades{0} ?></p>
                    <p>Pero todavía no he ido a <?= $ciudades{2} ?>
                    </p>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <h2>Capitales</h2>
                    <?php $capitales = [
                        "España" => "Madrid",
                        "Italia" => "Roma",
                        "Francia" => "París"];
                    foreach ($capitales as $pais => $pais) {
                        echo '<p> La capital de ' . $pais . ' es ' . $capitales[$pais] . '</p>' ;
                    }

                    ?>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <h2>Tabla ASCII</h2>
                    <table class="table table-striped">
                        <tr>
                            <th>Letra</th>
                            <th>Código ASCII</th>
                        </tr>
                        <?php
                        for ($x = 35; $x < 50; $x++) {
                            echo '<tr><td>' . chr($x) . ' </td><td> ' . $x . '</td></tr>' ;
                        }

                        ?>
                </div>
            </div>

            </table>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Tabla ASCII invertida</h2>
                    <table class="table table-striped">
                        <tr>
                            <th>Letra</th>
                            <?php
                            for ($x = 35; $x < 50; $x++) {
                                echo '<td>' . chr($x) . ' </td>' ;
                            }

                            ?>
                        </tr>
                        <tr>
                            <th>Código ASCII</th>
                            <?php
                            for ($x = 35; $x < 50; $x++) {
                                echo '<td>' . ($x) . ' </td>' ;
                            }

                            ?>

                        </tr>
                    </table>

                </div>
            </div>



        </div>







        <!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!--

		Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</body>
</html>