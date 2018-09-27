<!doctype html>

<html>
	<head>
		<title>Password Fields</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Password Fields</h2>
        <?php
            $record = "jdoe:8w4dso3a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash:extra1:extra 2";
            $passwordFields = array("login name", "optional encrypted password", "numberical user ID", "numberical group ID", "user name or comment field", "user home directory", "optional user command interpreter");
            $extraFields = 0;
            $fields = explode(":", $record);
            foreach ($fields as $fieldIndex => $value) {
                if ($fieldIndex < count($passwordFields)) {
                    echo "<p>The {$passwordFields[$fieldIndex]} is <em>$value</em></p>\n";
                } else {
                    ++$extraFields;
                    echo "<p>Extra field # $extraFields is <em>$extraFields</em></p>\n";
                }
            }
        ?>
	</body>
</html>