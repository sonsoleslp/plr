<?php
/**
 * Created by PhpStorm.
 * User: Sonsoles
 * Date: 27/04/2016
 * Time: 14:02
 */

require_once("restringido.php");?>
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

<section id="">
    <div class="container">
        <div class="row">
            <div class="wow slideInUp  col-xs-12  text-center">
                <br><br><br><br><br><br><br><br>
                <div class="panel-group">
                    <div id="content"><img src="images/preloader.gif" alt="Cargando..." /></div>


                </div>

            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>



    <script type="text/javascript">
        $("document").ready(function () {
            var url = window.location.pathname;
            var dir = url.substring(0, url.lastIndexOf('/')); // url del servidor, p.ej. http://localhost/departamentosSQL
            $.getJSON(dir + '/jsonp.php?callback=?', function (data) {
                $("#content").html('');
                $.each(data, function (i, item) {
                    /*'<div><p class="nombre">'
                     + item.name + '</p><p class="email">'
                     + item.email + '</p><p class="mensaje">'
                     + item.message + '</p></div>'*/
                    $("#content").append('<div class="panel">'
                    +    '<div class="panel-heading">'
                    +        '<h4 class="panel-title">'
                    +           '<a data-toggle="collapse" style="display:block;" href="#collapse'+(i)+'">'
                    +               '<i class="fa fa-envelope"></i>'+' De : '+ item.name +'  ( '+item.email+' )'
                    +               '<span class="visible-md visible-lg" style="float:right"> '
                    +                   '<i class="fa fa-calendar"></i>   '
                    +                   ((new Date( item.date+" GMT-4")).toLocaleString())
                    +               '</span> '
                    +           '</a>'
                    +        '</h4>'
                    +    '</div>'
                    +    '<div id="collapse'+(i)+'" class="panel-collapse collapse">'
                    +       '<div class="panel-body">'+item.message+'</div>'
              //      +       '<div class="panel-footer"> </div>'
                    +    '</div>'
                    +'</div>');

                });


            });
            $("#content").fadeIn(2000);
        });

    </script>
<style>
    .panel{
        text-align: left;
    }
   .panel-heading{
        background-color: #D40000;
    }
    .panel-title{
        color:white;
        transition: opacity 0.3s ease-in;
        text-transform: none;
    }
    .panel-title a:hover{
        color:white;
        opacity:0.5;
    }
    .panel-body{
        border: 1px solid #777;
    }
</style>
</body>
</html>

