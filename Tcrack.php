<?php
            $IPE = $_POST['IPE'];
            
            $connection = @fsockopen($IPE, "2008");
        
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
