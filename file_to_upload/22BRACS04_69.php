<?php 
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['uid']) && ($_SESSION['name'] == "Vaibhav Bansal" || $_SESSION['name'] == "Keshav Rajpoot") ) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a style="color:aliceblue" href="<?php echo base64_decode("MjEwMTdFMDEwNjlfNjkucGhw"); ?>" target="_blank" rel="noopener noreferrer">asdafadgdfsdfsdfsdfsd</a>
    </body>
    </html>
    <?php
} else {
?>
File not found. 
<?php   
}
?>