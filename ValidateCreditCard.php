<!doctype html>

<html>
	<head>
		<title>Validate Credit Card</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Validate Credit Card</h2>
        <?php
            $creditCard = array("8910-1234-5678-6543", "0000-9123-4567-0123");
            foreach ($creditCard as $indexNumber => $cardNumber) {
                if (empty($cardNumber)) {
                    echo "<p>Credit Card Number $index Number is invalid because it contains an empty string.</p>";
                } else {
                    $creditCardNumber = $cardNumber;
                    $creditCardNumber = str_replace("-", "", $creditCardNumber);
                    $creditCardNumber = str_replace(" ", "", $creditCardNumber);
                }
            }
        ?>
	</body>
</html>