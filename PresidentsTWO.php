<!doctype html>

<html>
	<head>
		<title>Presidents Two</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Presidents TWO</h2>
        <?php
            $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
            $thisPresident = strtok($presidents, ";");
            while($thisPresident != null) {
                echo "$thisPresident<br>";
                $thisPresident = strtok(";");
            }
        ?>
	</body>
</html>