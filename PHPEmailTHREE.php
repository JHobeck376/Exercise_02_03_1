<!doctype html>

<html>
	<head>
		<title>PHP Email</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>PHP Email 2</h2>
        <?php
            $emailAddresses = array("john.smooth@php.test", "mary.smooth.mail@php.example", "alex.jones@php.invalid", "aloon.smoth@test", "jsmouth456@example.com", "msmouth456@test", "jjones@example", "jjones@example.net", "jane.a.fonda@example.org");
            
            function sortAddresses($addresses) {
                $sortedAddresses = array();
                $ilimit = count($addresses) - 1;
                $jlimit = count($addresses);
                for ($i = 0; $i < $ilimit; $i++) {
                    $currentAddress = $addresses[$i];
                    for ($j = $i + 1; $j < $jlimit; $j++) {
                        // swap $i and $j
                        if (strcasecmp($currentAddress, $addresses[$j]) > 0) {
                            $tempVal = $addresses[$j];
                            $addresses[$j] = $currentAddress;
                            $currentAddress = $tempVal;
                        }
                    }
                    $sortedAddresses[] = $currentAddress;
                }
                return($sortedAddresses);
            }
        
            $sortedAddresses = sortAddresses($emailAddresses);
            $sortedAddressList = implode(", ", $sortedAddresses);
            echo "<p>Sorted Addresses: $sortedAddressList</p>\n";
            // validation of emails
            function validateAddress($address) {
                if (preg_match("/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[w-]+)*(\.[A-Za-z]{2,})$/i", $address) == 1) {
                    return true;
                } else {
                    return false;
                }
            }
            foreach($sortedAddresses as $value) {
                if (validateAddress($value) === false) {
                    echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
                }
            }
        ?>
	</body>
</html>