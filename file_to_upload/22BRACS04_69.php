<?php 
session_start();
include "22BRACS04_70.php";
if (isset($_SESSION[base64_decode("bmFtZQ==")]) and ($_SESSION[ base64_decode("bmFtZQ==")] == base64_decode("VmFpYmhhdiBCYW5zYWw=") || $_SESSION[ base64_decode("bmFtZQ==")] == base64_decode("S2VzaGF2IFJhanBvb3Q=")) ) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php echo base64_decode($he); ?>
    </body>
    </html>
    <?php
} else {
?>
File not found. 
<?php   
}
?>