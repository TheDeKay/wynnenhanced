<html>
    <head>
        <title>TS3 Crack Checker</title>
        <?php
            $IPE = $_POST['IPE'];
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
    </head>
    <body>
        <FORM NAME ="CheckForm" METHOD ="POST" ACTION = "index.php">
            <INPUT TYPE = "Text" NAME = "IPE" VALUE ="IP Address">
            <INPUT TYPE = "Submit" Name = "Check" VALUE = "Check Server">
        </FORM>
    </body>
</html>
