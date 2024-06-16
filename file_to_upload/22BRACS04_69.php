<?php 
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['uid']) && ($_SESSION['name'] == "Vaibhav Bansal" || $_SESSION['name'] == "Keshav Rajpoot") ) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="22BRACS04_69.php" method="post">
            <input type="text" name="uid">
            <input type="text" name="id">
            <button type="submit" name="doom_hahah" value="sdfsfsdfwerwefsfsdf">doom</button>
        </form>
    </body>
    </html>
    <?php
    if(isset($_POST['doom_hahah']) and isset($_POST['uid']) and isset($_POST['id']) and $_POST['doom_hahah'] == "sdfsfsdfwerwefsfsdf") {
        echo "<br>" . $_SESSION['uid'] = $_POST['uid'];
        echo "<br>" . $_SESSION['id'] = $_POST['id'];
    }
} else {
?>
File not found. 
<?php   
}
?>