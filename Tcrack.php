        <?php
            $IPE = $_GET['IPE'];
            $connection = @fsockopen($IPE, "2008");
        
            if (is_resource($connection))
            {
                print("This server may be cracked.");
        
                fclose($connection);
            }
        
            else
            {
                print("Crack not detected.");
            }
        ?>
