<!doctype html>

<html>
	<head>
		<title>PHP Email</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>PHP Email</h2>
        <?php
            $emailAddresses = array("john.smooth@php.test", "mary.smooth.mail@php.example", "alex.jones@php.invalid", "aloon.smoth@test", "jsmouth456@example.com", "msmouth456@test", "jjones@example", "jjones@example.net", "jane.a.fonda@example.org");
            // validation of emails
            function validateAddress($address) {
                if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
                    return true;
                } else {
                    return false;
                }
            }
            foreach($emailAddresses as $value) {
                if (validateAddress($value) === false) {
                    echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
                }
            }
        ?>
	</body>
</html>