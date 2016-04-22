<?php
    $connection = @fsockopen("127.0.0.1", "2008");

    if (is_resource($connection))
    {
        echo "This server may be cracked.";

        fclose($connection);
    }

    else
    {
        echo "Crack not detected.";
    }
?>
