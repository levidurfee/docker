<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Network Utility</title>
    </head>
    <body>
        <h1>Ping</h1>
        <form action="" method="post">
            <input type="text" name="host" value="" placeholder="hostname">
            <input type="text" name="port" value="" placeholder="port">
            <button type="submit" name="button">Connect</button>
        </form>
        <?php
        if(isset($_POST['host']) && isset($_POST['port'])) {
            $waitTimeoutInSeconds = 1;
            if($fp = fsockopen($_POST['host'], $_POST['port'], $errCode, $errStr, $waitTimeoutInSeconds)) {
               echo "<h2>Connected</h2>";
            } else {
               echo "<h2>Failed</h2>";
            }
            fclose($fp);
            echo "<pre>"; var_dump($_POST); echo "</pre>";
        }
        ?>
    </body>
</html>
