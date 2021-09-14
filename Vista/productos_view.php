<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
    </head>
    <body>
        <table>
            <?php
            foreach($productosTabla as $productoTabla){
            echo "<tr><td>".$productoTabla["nombreArticulo"]."</td></tr>";
            }
            ?>
        </table>
    </body>
</html>